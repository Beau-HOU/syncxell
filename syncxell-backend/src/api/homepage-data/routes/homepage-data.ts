export default {
  routes: [
    {
      method: 'GET',
      path: '/homepage-data',
      handler: 'homepage-data.getHomepageData',
      config: {
        auth: false,
        policies: [],
        middlewares: [],
        description: 'Données agrégées pour la page d\'accueil (hero + services + case studies + testimonials)',
      },
    },
    {
      method: 'GET',
      path: '/services-by-category',
      handler: 'homepage-data.getServicesByCategory',
      config: {
        auth: false,
        policies: [],
        middlewares: [],
        description: 'Toutes les catégories de services avec leurs sous-services imbriqués',
      },
    },
  ],
};
