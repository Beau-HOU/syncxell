/**
 * Extension du plugin upload — Strapi v5.
 * Injecte une validation MIME avant chaque upload.
 * En Strapi v5, le content-api controller s'appelle 'content-api' (et non 'upload').
 */

const ALLOWED_MIME_TYPES = new Set([
  'image/jpeg',
  'image/jpg',
  'image/png',
  'image/svg+xml',
  'image/webp',
  'image/gif',
  'application/pdf',
  'application/msword',
  'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
  'application/vnd.ms-excel',
  'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
]);

function patchUploadController(controller: any) {
  if (!controller || typeof controller.upload !== 'function') return;

  const original = controller.upload.bind(controller);
  controller.upload = async (ctx: any) => {
    const files = ctx.request.files?.files;
    if (files) {
      const fileList = Array.isArray(files) ? files : [files];
      for (const file of fileList) {
        if (file.type && !ALLOWED_MIME_TYPES.has(file.type)) {
          ctx.status = 422;
          ctx.body = {
            error: {
              status: 422,
              name: 'UnprocessableEntity',
              message: `Type de fichier non autorisé : ${file.type}. Acceptés : images, PDF, DOCX, XLSX.`,
            },
          };
          return;
        }
      }
    }
    return original(ctx);
  };
}

export default (plugin: any) => {
  // Strapi v5 : le controller content-api peut s'appeler 'content-api' ou 'upload'
  if (plugin?.controllers?.['content-api']) {
    patchUploadController(plugin.controllers['content-api']);
  } else if (plugin?.controllers?.upload) {
    patchUploadController(plugin.controllers.upload);
  }
  // Si ni l'un ni l'autre n'existe, on retourne le plugin sans modification
  // (la validation MIME reste disponible côté frontend)
  return plugin;
};
