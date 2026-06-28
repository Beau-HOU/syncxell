export default {
  routes: [
    {
      method: 'POST',
      path: '/rfq-submissions',
      handler: 'rfq-submission.create',
      config: {
        auth: false,
        policies: [],
        middlewares: [],
      },
    },
    // Les routes GET/PUT/DELETE sont admin-only — gérées par les permissions Strapi
    {
      method: 'GET',
      path: '/rfq-submissions',
      handler: 'rfq-submission.find',
      config: { policies: [] },
    },
    {
      method: 'GET',
      path: '/rfq-submissions/:id',
      handler: 'rfq-submission.findOne',
      config: { policies: [] },
    },
    {
      method: 'PUT',
      path: '/rfq-submissions/:id',
      handler: 'rfq-submission.update',
      config: { policies: [] },
    },
    {
      method: 'DELETE',
      path: '/rfq-submissions/:id',
      handler: 'rfq-submission.delete',
      config: { policies: [] },
    },
  ],
};
