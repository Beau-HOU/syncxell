export default {
  routes: [
    {
      method: 'POST',
      path: '/teaming-requests',
      handler: 'teaming-request.create',
      config: {
        auth: false,
        policies: [],
        middlewares: [],
      },
    },
    {
      method: 'GET',
      path: '/teaming-requests',
      handler: 'teaming-request.find',
      config: { policies: [] },
    },
    {
      method: 'GET',
      path: '/teaming-requests/:id',
      handler: 'teaming-request.findOne',
      config: { policies: [] },
    },
    {
      method: 'PUT',
      path: '/teaming-requests/:id',
      handler: 'teaming-request.update',
      config: { policies: [] },
    },
    {
      method: 'DELETE',
      path: '/teaming-requests/:id',
      handler: 'teaming-request.delete',
      config: { policies: [] },
    },
  ],
};
