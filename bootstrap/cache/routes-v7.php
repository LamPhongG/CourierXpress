<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/admin/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/agents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/reports/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.reports.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.stats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/pending-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.pending-orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/available-shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.available-shippers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/shipper-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shipper-status',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/agent/shippers/performance/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.performance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/recent-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.recent-orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipping/calculate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipping.calculate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.dashboard-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.statistics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/recent-activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.recent-activities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/daily-performance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.daily-performance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/current-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.current-orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/orders/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.orders.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/location/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.location.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/status/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.status.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/delivery-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.delivery-history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/shipper/api/delivery-statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.delivery-statistics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/debug-users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.debug-users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/reset-user-passwords' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.reset-passwords',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/debug-auth-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.debug-auth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/debug-current-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.debug-current-user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/test-simple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.test-simple',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/test-db' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.test-db',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/login-user-simple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.login-user-simple',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/login-user-with-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.login-user-with-session',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/test-create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.test-create-order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/test-order-model' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.test-order-model',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/quick-login-shipper' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.quick-login-shipper',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dev/create-test-shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.create-test-shippers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KM6wkHk59Grnam2W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/footer-demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lH3yJt7sUOzYGPBK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper-system-ready' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2wL1yi5ZYODGNQUC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/debug-user-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vmtremcatx1dmCts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-db' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ntZw6Emerlv9MBJG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-user-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RrxY30JJOCMENyLX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-register-form' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test.register.form',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test.register.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test-login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'test.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'register.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dich-vu/giao-hang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dich-vu.giao-hang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dich-vu/xe-tai' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dich-vu.xe-tai',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dich-vu/chuyen-nha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dich-vu.chuyen-nha',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dich-vu/doanh-nghiep' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dich-vu.doanh-nghiep',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/khach-hang/ca-nhan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'khach-hang.ca-nhan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/khach-hang/doanh-nghiep' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'khach-hang.doanh-nghiep',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ho-tro/khach-hang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ho-tro.khach-hang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ho-tro/tai-xe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ho-tro.tai-xe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tai-xe/dang-ky' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tai-xe.dang-ky',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tai-xe/cong-dong' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tai-xe.cong-dong',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tai-xe/cam-nang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tai-xe.cam-nang',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tuyen-dung/ve-chung-toi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tuyen-dung.ve-chung-toi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tuyen-dung/cau-chuyen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tuyen-dung.cau-chuyen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tuyen-dung/gia-nhap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tuyen-dung.gia-nhap',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cong-dong/ho-tro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cong-dong.ho-tro',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.shippers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/audit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.audit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/recent-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::NAjXrFK9LGf1rFa8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::OG0MALpqRH8p7vyo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::snaCRi1o4ggY8lxC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::piC45wR81ZQp4KRd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/settings/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::FTR0xAmtIZyXZdj3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/settings/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::YjVEBbxQyJEGIEjC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/settings/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::Lv3yRbaq9qoCEoPP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/audit/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::TkTotzqlvw8LAz8u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/audit/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::JLxwOYVanYyJv6d0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/api/audit/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::ymxnVG2GZu47npbE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.shippers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/reports/export' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.reports.export',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.create-order',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/api/recent-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.api.generated::KyVvDPeJh6ORfzCt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/api/pending-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.api.generated::dvCgPw47xPgurLxI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/agent/api/shippers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.api.generated::kCezOdhBzO2ofTwJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/tracking' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.tracking',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/dashboard-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/current-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::aCpqWUvMewi0ibHq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::SuSPDl9bJEYEQctv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/recent-activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::VGrEaVvCsAaFoFJ1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/daily-performance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::EmaGdBApI68JeP68',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/update-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::MX94K636RkvEX6BJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/update-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::wisnU1DVhegnPyW1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::6LLGftcafOjYzYhr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/orders/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::Mkr4RPOuZI9oWLfE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/delivery-history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::WYpS2oomCqBdz5om',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shipper/api/delivery-statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::twkfJ0cW1PKqYQu5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/agent/reports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2leeN2GBezEegbp8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/agent/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnsmWZW6UEK1GwEE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/user/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xy1YZfD4Bm1mN0DV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/user/create-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qgaSULAOc2ZW9mB7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fjXVdgK2Bg1DT5bn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.language',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/full-demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.full',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/complete-demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.complete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/individual-complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.individual',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/all-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/fedex-style' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.fedex',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/lalamove-style' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.lalamove',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/header-demo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.header',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/demo/dropdown-test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'demo.dropdown',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.test',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test-accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.accounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.phpinfo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/add-address-column' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.add-address-column',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test-shippers-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.test-shippers-api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test-agents-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.test-agents-api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test-reports-api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.test-reports-api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/admin-data-summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.admin-data-summary',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/create-sample-orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.create-sample-orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/create-sample-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.create-sample-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/init-admin-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.init-admin-data',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dev/test-db-connection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dev.test-db-connection',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|pi/(?|a(?|dmin/(?|agents/([^/]++)(?|(*:48)|/toggle\\-status(*:70))|shippers/([^/]++)(?|(*:98)|/(?|toggle\\-status(*:123)|details(*:138)))|orders/([^/]++)(?|(*:166)))|gent/(?|orders/(?|([^/]++)(?|(*:205)|/(?|confirm(*:224)|assign\\-shipper(*:247)|status(*:261)))|statistics(*:281)|batch\\-operation(*:305)|export\\-report(*:327))|shippers/([^/]++)(?|(*:356)|/toggle\\-online(*:379))))|user/orders/([^/]++)(?|(*:413)|/cancel(*:428))|shipper/api/(?|orders/([^/]++)(?|(*:470)|/update\\-status(*:493))|delivery\\-details/([^/]++)(*:528))|dev/test\\-password(?:/([^/]++))?(*:569)|tracking/([^/]++)(*:594))|dmin/api/audit/logs/([^/]++)(*:631)|gent/orders/([^/]++)(*:659))|/language/([^/]++)(*:686)|/s(?|hipper/api/(?|orders/([^/]++)(?|(*:731)|/update\\-status(*:754))|delivery\\-details/([^/]++)(*:789))|torage/(.*)(*:809)))/?$}sDu',
    ),
    3 => 
    array (
      48 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents.show',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents.update',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents.destroy',
          ),
          1 => 
          array (
            0 => 'agent',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.agents.toggle-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      98 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.show',
          ),
          1 => 
          array (
            0 => 'shipper',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.update',
          ),
          1 => 
          array (
            0 => 'shipper',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.destroy',
          ),
          1 => 
          array (
            0 => 'shipper',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.toggle-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.shippers.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'api.admin.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.confirm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.assign-shipper',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.update-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.statistics',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.batch-operation',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.orders.export-report',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.agent.shippers.toggle-online',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.orders.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.user.orders.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.orders.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.orders.update-status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.shipper.delivery-details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.dev.test-password',
            'email' => NULL,
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gcPQTw5iNN5AKDQG',
          ),
          1 => 
          array (
            0 => 'trackingNumber',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.api.generated::tvcDKivOWe8DdjDb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      659 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'agent.orders.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'language.change',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::kzsJqWhrAa598mtJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      754 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::3uVkSx9jBxIERhYH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shipper.api.generated::VKNkRUPwhtbUJ7zh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'api.admin.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getStats',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getStats',
        'as' => 'api.admin.stats',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/agents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@getAgents',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@getAgents',
        'as' => 'api.admin.agents',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/agents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.agents.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@store',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/agents/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.agents.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@show',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/agents/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.agents.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@update',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/agents/{agent}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.agents.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.agents.toggle-status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/admin/agents/{id}/toggle-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AgentController@toggleStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\AgentController@toggleStatus',
        'as' => 'api.admin.agents.toggle-status',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@getShippers',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@getShippers',
        'as' => 'api.admin.shippers',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.shippers.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@store',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/shippers/{shipper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.shippers.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@show',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/shippers/{shipper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.shippers.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@update',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/shippers/{shipper}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.shippers.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.toggle-status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/admin/shippers/{id}/toggle-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@toggleStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@toggleStatus',
        'as' => 'api.admin.shippers.toggle-status',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.shippers.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/shippers/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ShipperController@details',
        'controller' => 'App\\Http\\Controllers\\Admin\\ShipperController@details',
        'as' => 'api.admin.shippers.details',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.orders.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.orders.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.orders.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.orders.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'as' => 'api.admin.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@index',
        'as' => 'api.admin.reports',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.admin.reports.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/reports/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReportController@export',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReportController@export',
        'as' => 'api.admin.reports.export',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.stats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@getStats',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@getStats',
        'as' => 'api.agent.stats',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.pending-orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/pending-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@getPendingOrders',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@getPendingOrders',
        'as' => 'api.agent.pending-orders',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.available-shippers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/available-shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@getAvailableShippers',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@getAvailableShippers',
        'as' => 'api.agent.available-shippers',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shipper-status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/shipper-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@getShipperStatus',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@getShipperStatus',
        'as' => 'api.agent.shipper-status',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@getOrders',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@getOrders',
        'as' => 'api.agent.orders',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@show',
        'as' => 'api.agent.orders.show',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/orders/{id}/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@confirmOrder',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@confirmOrder',
        'as' => 'api.agent.orders.confirm',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.assign-shipper' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/orders/{id}/assign-shipper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\AgentController@assignShipper',
        'controller' => 'App\\Http\\Controllers\\Agent\\AgentController@assignShipper',
        'as' => 'api.agent.orders.assign-shipper',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.update-status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/agent/orders/{id}/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@updateStatus',
        'as' => 'api.agent.orders.update-status',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.statistics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/orders/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@getStatistics',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@getStatistics',
        'as' => 'api.agent.orders.statistics',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.batch-operation' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/orders/batch-operation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@batchOperation',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@batchOperation',
        'as' => 'api.agent.orders.batch-operation',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.orders.export-report' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/orders/export-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@exportReport',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@exportReport',
        'as' => 'api.agent.orders.export-report',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@getShippers',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@getShippers',
        'as' => 'api.agent.shippers.list',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@store',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@store',
        'as' => 'api.agent.shippers.store',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/shippers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@show',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@show',
        'as' => 'api.agent.shippers.show',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/agent/shippers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@update',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@update',
        'as' => 'api.agent.shippers.update',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.toggle-online' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/agent/shippers/{id}/toggle-online',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@toggleOnlineStatus',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@toggleOnlineStatus',
        'as' => 'api.agent.shippers.toggle-online',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.agent.shippers.performance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/agent/shippers/performance/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@getPerformanceStats',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@getPerformanceStats',
        'as' => 'api.agent.shippers.performance',
        'namespace' => NULL,
        'prefix' => 'api/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@getUserData',
        'controller' => 'App\\Http\\Controllers\\DashboardController@getUserData',
        'as' => 'api.user.data',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.recent-orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/recent-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@getRecentOrders',
        'controller' => 'App\\Http\\Controllers\\DashboardController@getRecentOrders',
        'as' => 'api.user.recent-orders',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\User\\OrderController@index',
        'as' => 'api.user.orders',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\User\\OrderController@store',
        'as' => 'api.user.orders.store',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\User\\OrderController@show',
        'as' => 'api.user.orders.show',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.user.orders.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/orders/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\OrderController@cancel',
        'controller' => 'App\\Http\\Controllers\\User\\OrderController@cancel',
        'as' => 'api.user.orders.cancel',
        'namespace' => NULL,
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipping.calculate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shipping/calculate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1480:"function (\\Illuminate\\Http\\Request $request) {
            // Simple shipping calculation service
            $services = [
                [
                    \'id\' => \'standard\',
                    \'name\' => \'Giao chuẩn\',
                    \'description\' => \'Giao hàng trong 1-2 ngày làm việc\',
                    \'fee\' => 30000,
                    \'estimated_time\' => \'1-2 ngày\',
                    \'recommended\' => true
                ],
                [
                    \'id\' => \'fast\',
                    \'name\' => \'Giao nhanh\',
                    \'description\' => \'Giao hàng trong ngày\',
                    \'fee\' => 50000,
                    \'estimated_time\' => \'Trong ngày\',
                    \'recommended\' => false
                ],
                [
                    \'id\' => \'express\',
                    \'name\' => \'Giao hỏa tốc\',
                    \'description\' => \'Giao hàng trong 2-4 giờ\',
                    \'fee\' => 80000,
                    \'estimated_time\' => \'2-4 giờ\',
                    \'recommended\' => false
                ]
            ];
            
            // Add weight-based surcharge
            $weight = $request->input(\'weight\', 1);
            if ($weight > 1) {
                foreach ($services as &$service) {
                    $service[\'fee\'] += ($weight - 1) * 10000;
                }
            }
            
            return \\response()->json([\'services\' => $services]);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006cb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'api.shipping.calculate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.dashboard-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDashboardData',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDashboardData',
        'as' => 'api.shipper.dashboard-data',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.statistics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getStatistics',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getStatistics',
        'as' => 'api.shipper.statistics',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.recent-activities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/recent-activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getRecentActivities',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getRecentActivities',
        'as' => 'api.shipper.recent-activities',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.daily-performance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/daily-performance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDailyPerformance',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDailyPerformance',
        'as' => 'api.shipper.daily-performance',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.current-orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/current-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getCurrentOrders',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getCurrentOrders',
        'as' => 'api.shipper.current-orders',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.orders.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/orders/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'as' => 'api.shipper.orders.list',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrderDetails',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrderDetails',
        'as' => 'api.shipper.orders.show',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.orders.update-status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shipper/api/orders/{id}/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@updateStatus',
        'as' => 'api.shipper.orders.update-status',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.location.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shipper/api/location/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateLocation',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateLocation',
        'as' => 'api.shipper.location.update',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.status.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/shipper/api/status/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateStatus',
        'as' => 'api.shipper.status.update',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.delivery-history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/delivery-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryHistory',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryHistory',
        'as' => 'api.shipper.delivery-history',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.delivery-statistics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/delivery-statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryStatistics',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryStatistics',
        'as' => 'api.shipper.delivery-statistics',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.shipper.delivery-details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/shipper/api/delivery-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'web',
          2 => 'auth',
          3 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryDetails',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryDetails',
        'as' => 'api.shipper.delivery-details',
        'namespace' => NULL,
        'prefix' => 'api/shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.debug-users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/debug-users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:156:"function () {
            $users = \\App\\Models\\User::all([\'id\', \'name\', \'email\', \'role\', \'status\']);
            return \\response()->json($users);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006940000000000000000";}}',
        'as' => 'api.dev.debug-users',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.test-password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/test-password/{email?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:802:"function ($email = \'admin@courierxpress.com\') {
            $user = \\App\\Models\\User::where(\'email\', $email)->first();
            if ($user) {
                $testPassword = \'123456\';
                $hashCheck = \\Illuminate\\Support\\Facades\\Hash::check($testPassword, $user->password);
                return \\response()->json([
                    \'user_found\' => true,
                    \'email\' => $user->email,
                    \'role\' => $user->role,
                    \'status\' => $user->status,
                    \'password_hash\' => \\substr($user->password, 0, 20) . \'...\',
                    \'test_password\' => $testPassword,
                    \'password_matches\' => $hashCheck,
                ]);
            }
            return \\response()->json([\'user_found\' => false]);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006da0000000000000000";}}',
        'as' => 'api.dev.test-password',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.reset-passwords' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dev/reset-user-passwords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:811:"function () {
            $users = \\App\\Models\\User::all();
            $updated = [];
            
            foreach ($users as $user) {
                $user->password = \\Illuminate\\Support\\Facades\\Hash::make(\'123456\');
                $user->status = \'active\';
                $user->save();
                
                $updated[] = [
                    \'email\' => $user->email,
                    \'name\' => $user->name,
                    \'role\' => $user->role
                ];
            }
            
            return \\response()->json([
                \'message\' => \'All user passwords reset successfully\',
                \'updated_users\' => $updated,
                \'total_updated\' => \\count($updated),
                \'note\' => \'All passwords are now: 123456\'
            ]);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006dc0000000000000000";}}',
        'as' => 'api.dev.reset-passwords',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.debug-auth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/debug-auth-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:353:"function () {
            return \\response()->json([
                \'authenticated\' => \\auth()->check(),
                \'user\' => \\auth()->user(),
                \'session_id\' => \\session()->getId(),
                \'auth_guard\' => \\config(\'auth.defaults.guard\'),
                \'session_driver\' => \\config(\'session.driver\')
            ]);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006de0000000000000000";}}',
        'as' => 'api.dev.debug-auth',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.debug-current-user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/debug-current-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:696:"function () {
            if (\\auth()->check()) {
                $user = \\auth()->user();
                return \\response()->json([
                    \'authenticated\' => true,
                    \'user\' => [
                        \'id\' => $user->id,
                        \'name\' => $user->name,
                        \'email\' => $user->email,
                        \'role\' => $user->role,
                        \'status\' => $user->status
                    ]
                ]);
            } else {
                return \\response()->json([
                    \'authenticated\' => false,
                    \'message\' => \'User not logged in\'
                ]);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e00000000000000000";}}',
        'as' => 'api.dev.debug-current-user',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.test-simple' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/test-simple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:218:"function () {
            return \\response()->json([
                \'success\' => true,
                \'message\' => \'API hoạt động bình thường\',
                \'timestamp\' => \\now()
            ]);
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e20000000000000000";}}',
        'as' => 'api.dev.test-simple',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.test-db' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/test-db',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:559:"function () {
            try {
                $userCount = \\App\\Models\\User::count();
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Kết nối database thành công\',
                    \'user_count\' => $userCount
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi kết nối database: \' . $e->getMessage()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e40000000000000000";}}',
        'as' => 'api.dev.test-db',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.login-user-simple' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/login-user-simple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1553:"function () {
            try {
                // Find a user with role \'user\'
                $user = \\App\\Models\\User::where(\'role\', \'user\')->first();
                
                if (!$user) {
                    // Try to find any user and update their role
                    $user = \\App\\Models\\User::first();
                    if ($user) {
                        $user->role = \'user\';
                        $user->save();
                    } else {
                        return \\response()->json([
                            \'success\' => false,
                            \'message\' => \'Không tìm thấy user nào trong database\'
                        ], 404);
                    }
                }
                
                // Simple login without session stuff
                \\auth()->login($user, false);
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Đăng nhập thành công!\',
                    \'user\' => [
                        \'id\' => $user->id,
                        \'name\' => $user->name,
                        \'email\' => $user->email,
                        \'role\' => $user->role
                    ]
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi: \' . $e->getMessage(),
                    \'trace\' => $e->getTraceAsString()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e60000000000000000";}}',
        'as' => 'api.dev.login-user-simple',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.login-user-with-session' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/login-user-with-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1882:"function () {
            try {
                $user = \\App\\Models\\User::where(\'role\', \'user\')->first();
                
                if (!$user) {
                    $user = \\App\\Models\\User::first();
                    if ($user) {
                        $user->role = \'user\';
                        $user->save();
                    }
                }
                
                if (!$user) {
                    return \\response()->json([\'success\' => false, \'message\' => \'Không tìm thấy user\'], 404);
                }
                
                // Login with session
                \\auth()->login($user, false);
                \\request()->session()->regenerate();
                
                // Store user data in session
                \\session()->put(\'user_data\', [
                    \'id\' => $user->id,
                    \'name\' => $user->name,
                    \'email\' => $user->email,
                    \'role\' => $user->role,
                    \'status\' => $user->status ?? \'active\'
                ]);
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Đăng nhập và tạo session thành công!\',
                    \'user\' => [
                        \'id\' => $user->id,
                        \'name\' => $user->name,
                        \'email\' => $user->email,
                        \'role\' => $user->role
                    ],
                    \'session_id\' => \\session()->getId(),
                    \'instructions\' => \'Bây giờ bạn có thể truy cập /user/create-order\'
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi: \' . $e->getMessage()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006e80000000000000000";}}',
        'as' => 'api.dev.login-user-with-session',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.test-create-order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dev/test-create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1679:"function (\\Illuminate\\Http\\Request $request) {
            try {
                // Login user first
                $user = \\App\\Models\\User::where(\'role\', \'user\')->first();
                if (!$user) {
                    return \\response()->json([\'success\' => false, \'message\' => \'Không tìm thấy user\'], 404);
                }
                
                \\auth()->login($user, false);
                
                // Test data
                $testData = [
                    \'pickup_name\' => \'Người gửi test\',
                    \'pickup_phone\' => \'0123456789\',
                    \'pickup_address\' => \'Số 1 Nguyễn Trãi, Q1, TP.HCM\',
                    \'delivery_name\' => \'Người nhận test\',
                    \'delivery_phone\' => \'0987654321\',
                    \'delivery_address\' => \'Số 2 Lê Lợi, Q1, TP.HCM\',
                    \'package_type\' => \'document\',
                    \'weight\' => 1.5,
                    \'value\' => 100000,
                    \'shipping_service\' => \'standard\'
                ];
                
                // Call the actual OrderController
                $controller = new \\App\\Http\\Controllers\\User\\OrderController();
                $request->merge($testData);
                
                $response = $controller->store($request);
                return $response;
                
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi khi tạo đơn hàng: \' . $e->getMessage(),
                    \'trace\' => $e->getTraceAsString()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006ea0000000000000000";}}',
        'as' => 'api.dev.test-create-order',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.test-order-model' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/test-order-model',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:653:"function () {
            try {
                // Test if Order model works
                $orderCount = \\App\\Models\\Order::count();
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Order model hoạt động tốt\',
                    \'order_count\' => $orderCount
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi Order model: \' . $e->getMessage(),
                    \'trace\' => $e->getTraceAsString()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006ec0000000000000000";}}',
        'as' => 'api.dev.test-order-model',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.quick-login-shipper' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/quick-login-shipper',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2205:"function () {
            try {
                // Find or create a user with role \'shipper\'
                $user = \\App\\Models\\User::where(\'role\', \'shipper\')->first();
                
                if (!$user) {
                    // Create a test shipper with only required fields
                    $user = \\App\\Models\\User::create([
                        \'name\' => \'Test Shipper\',
                        \'email\' => \'shipper@courierxpress.com\',
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                        \'role\' => \'shipper\',
                        \'status\' => \'active\',
                        \'city\' => \'TP. Hồ Chí Minh\'
                    ]);
                }
                
                // Login the user
                \\auth()->login($user, false);
                \\request()->session()->regenerate();
                
                // Store user data in session
                \\request()->session()->put(\'user_data\', [
                    \'id\' => $user->id,
                    \'name\' => $user->name,
                    \'email\' => $user->email,
                    \'role\' => $user->role,
                    \'status\' => $user->status,
                    \'city\' => $user->city
                ]);
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Đăng nhập Shipper thành công!\',
                    \'user\' => [
                        \'id\' => $user->id,
                        \'name\' => $user->name,
                        \'email\' => $user->email,
                        \'role\' => $user->role,
                        \'status\' => $user->status
                    ],
                    \'session_id\' => \\session()->getId(),
                    \'instructions\' => \'Bây giờ bạn có thể truy cập /shipper/dashboard\'
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi: \' . $e->getMessage(),
                    \'trace\' => $e->getTraceAsString()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006ee0000000000000000";}}',
        'as' => 'api.dev.quick-login-shipper',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.dev.create-test-shippers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dev/create-test-shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2564:"function () {
            try {
                $testShippers = [
                    [
                        \'name\' => \'Nguyễn Văn Shipper 1\',
                        \'email\' => \'shipper1@courierxpress.com\',
                        \'phone\' => \'0123456789\',
                        \'city\' => \'TP. Hồ Chí Minh\',
                        \'is_online\' => true
                    ],
                    [
                        \'name\' => \'Trần Thị Shipper 2\', 
                        \'email\' => \'shipper2@courierxpress.com\',
                        \'phone\' => \'0987654321\',
                        \'city\' => \'TP. Hồ Chí Minh\',
                        \'is_online\' => true
                    ],
                    [
                        \'name\' => \'Lê Văn Shipper 3\',
                        \'email\' => \'shipper3@courierxpress.com\', 
                        \'phone\' => \'0369258147\',
                        \'city\' => \'TP. Hồ Chí Minh\',
                        \'is_online\' => false
                    ]
                ];
                
                $created = [];
                
                foreach ($testShippers as $shipperData) {
                    $existing = \\App\\Models\\User::where(\'email\', $shipperData[\'email\'])->first();
                    if (!$existing) {
                        $shipper = \\App\\Models\\User::create([
                            \'name\' => $shipperData[\'name\'],
                            \'email\' => $shipperData[\'email\'],
                            \'phone\' => $shipperData[\'phone\'],
                            \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                            \'role\' => \'shipper\',
                            \'status\' => \'active\',
                            \'city\' => $shipperData[\'city\'],
                            \'is_online\' => $shipperData[\'is_online\']
                        ]);
                        $created[] = $shipper->name;
                    }
                }
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Tạo shipper test thành công!\',
                    \'created_shippers\' => $created,
                    \'total_shippers\' => \\App\\Models\\User::where(\'role\', \'shipper\')->count()
                ]);
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi tạo shipper: \' . $e->getMessage()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f00000000000000000";}}',
        'as' => 'api.dev.create-test-shippers',
        'namespace' => NULL,
        'prefix' => 'api/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KM6wkHk59Grnam2W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'up',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:833:"function () {
                    $exception = null;

                    try {
                        \\Illuminate\\Support\\Facades\\Event::dispatch(new \\Illuminate\\Foundation\\Events\\DiagnosingHealth);
                    } catch (\\Throwable $e) {
                        if (app()->hasDebugModeEnabled()) {
                            throw $e;
                        }

                        report($e);

                        $exception = $e->getMessage();
                    }

                    return response(\\Illuminate\\Support\\Facades\\View::file(\'C:\\\\xampp\\\\htdocs\\\\CourierXpress\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Foundation\\\\Configuration\'.\'/../resources/health-up.blade.php\', [
                        \'exception\' => $exception,
                    ]), status: $exception ? 500 : 200);
                }";s:5:"scope";s:54:"Illuminate\\Foundation\\Configuration\\ApplicationBuilder";s:4:"this";N;s:4:"self";s:32:"00000000000006980000000000000000";}}',
        'as' => 'generated::KM6wkHk59Grnam2W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {
    return \\view(\'home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f30000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lH3yJt7sUOzYGPBK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'footer-demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
    return \\view(\'footer-demo\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lH3yJt7sUOzYGPBK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2wL1yi5ZYODGNQUC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper-system-ready',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function () {
    return \\view(\'shipper-system-ready\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2wL1yi5ZYODGNQUC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vmtremcatx1dmCts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'debug-user-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1097:"function () {
    // Check authentication
    if (!\\auth()->check()) {
        return \\response()->json([\'error\' => \'Not authenticated\']);
    }
    
    $user = \\auth()->user();
    if ($user->role !== \'user\') {
        return \\response()->json([\'error\' => \'Not a user role\']);
    }
    
    // Test calling the actual API controller method
    $controller = new \\App\\Http\\Controllers\\DashboardController();
    
    try {
        $statsResponse = $controller->getUserStats();
        $ordersResponse = $controller->getUserRecentOrders();
        
        return \\response()->json([
            \'message\' => \'Debug successful\',
            \'user\' => $user->only([\'id\', \'name\', \'email\', \'role\']),
            \'stats_response\' => \\json_decode($statsResponse->getContent(), true),
            \'orders_response\' => \\json_decode($ordersResponse->getContent(), true)
        ]);
    } catch (\\Exception $e) {
        return \\response()->json([
            \'error\' => \'Controller call failed\',
            \'message\' => $e->getMessage(),
            \'trace\' => $e->getTraceAsString()
        ]);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006f90000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Vmtremcatx1dmCts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ntZw6Emerlv9MBJG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-db',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2682:"function () {
    try {
        $userCount = \\App\\Models\\User::count();
        $orderCount = \\App\\Models\\Order::count();
        $userRoleCount = \\App\\Models\\User::where(\'role\', \'user\')->count();
        
        // Create a test user if none exists
        if ($userRoleCount === 0) {
            $testUser = \\App\\Models\\User::create([
                \'name\' => \'Test User\',
                \'email\' => \'user@test.com\',
                \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                \'role\' => \'user\',
                \'status\' => \'active\',
                \'phone\' => \'0123456789\'
            ]);
            
            // Create a test order for this user
            \\App\\Models\\Order::create([
                \'tracking_number\' => \'TEST001\',
                \'user_id\' => $testUser->id,
                \'pickup_name\' => \'Test Sender\',
                \'pickup_phone\' => \'0123456789\',
                \'pickup_address\' => \'Test Pickup Address\',
                \'pickup_ward\' => \'Ward 1\',
                \'pickup_district\' => \'District 1\',
                \'pickup_city\' => \'Ho Chi Minh\',
                \'delivery_name\' => \'Test Receiver\',
                \'delivery_phone\' => \'0987654321\',
                \'delivery_address\' => \'Test Delivery Address\',
                \'delivery_ward\' => \'Ward 2\',
                \'delivery_district\' => \'District 2\',
                \'delivery_city\' => \'Ha Noi\',
                \'package_type\' => \'document\',
                \'weight\' => 1.0,
                \'cod_amount\' => 100000,
                \'shipping_fee\' => 25000,
                \'total_fee\' => 25000,
                \'status\' => \'pending\',
                \'payment_method\' => \'cod\',
                \'payment_status\' => \'pending\'
            ]);
            
            return \\response()->json([
                \'message\' => \'Test user and order created successfully\',
                \'test_user\' => [
                    \'email\' => \'user@test.com\',
                    \'password\' => \'123456\'
                ],
                \'total_users\' => \\App\\Models\\User::count(),
                \'user_role_users\' => \\App\\Models\\User::where(\'role\', \'user\')->count(),
                \'total_orders\' => \\App\\Models\\Order::count()
            ]);
        }
        
        return \\response()->json([
            \'message\' => \'Database connected successfully\',
            \'total_users\' => $userCount,
            \'user_role_users\' => $userRoleCount,
            \'total_orders\' => $orderCount
        ]);
    } catch (\\Exception $e) {
        return \\response()->json([
            \'error\' => \'Database connection failed: \' . $e->getMessage()
        ], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006fb0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ntZw6Emerlv9MBJG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RrxY30JJOCMENyLX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-user-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:909:"function () {
    try {
        // Get first user with role \'user\'
        $user = \\App\\Models\\User::where(\'role\', \'user\')->first();
        
        if (!$user) {
            return \\response()->json([
                \'error\' => \'No user found with role "user"\',
                \'total_users\' => \\App\\Models\\User::count(),
                \'user_role_count\' => \\App\\Models\\User::where(\'role\', \'user\')->count()
            ]);
        }
        
        // Manually authenticate the user
        \\auth()->login($user);
        
        // Test the API endpoint
        $controller = new \\App\\Http\\Controllers\\DashboardController();
        $response = $controller->getUserStats();
        
        return $response;
    } catch (\\Exception $e) {
        return \\response()->json([
            \'error\' => \'Test failed: \' . $e->getMessage(),
            \'trace\' => $e->getTraceAsString()
        ], 500);
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006fd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RrxY30JJOCMENyLX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:824:"function (\\Illuminate\\Http\\Request $request) {
    // Check if user is authenticated and redirect to role-specific tracking
    if (\\auth()->check()) {
        $role = \\auth()->user()->role;
        switch($role) {
            case \'admin\':
                return \\redirect(\'/admin/tracking\');
            case \'agent\':
                return \\redirect(\'/agent/tracking\');
            case \'shipper\':
                return \\redirect(\'/shipper/tracking\');
            case \'user\':
                return \\redirect(\'/user/tracking\');
            default:
                break;
        }
    }
    
    // For non-authenticated users, show basic tracking page
    $trackingNumber = $request->get(\'tracking_number\') ?? $request->get(\'tracking_id\');
    return \\view(\'public.tracking\', [\'trackingNumber\' => $trackingNumber]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006ff0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tracking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.tracking' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TrackingController@track',
        'controller' => 'App\\Http\\Controllers\\TrackingController@track',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'api.tracking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gcPQTw5iNN5AKDQG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tracking/{trackingNumber}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TrackingController@getOrderTimeline',
        'controller' => 'App\\Http\\Controllers\\TrackingController@getOrderTimeline',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gcPQTw5iNN5AKDQG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test.register.form' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-register-form',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () {
    return \\view(\'auth.test-register\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007030000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test.register.form',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test.register.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'test-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test.register.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'test.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test-login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function () {
    return \\view(\'auth.test-login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007060000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'test.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () {
        return \\view(\'auth.login\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000070a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"function () {
        return \\view(\'auth.register\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000070c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'language.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@changeLanguage',
        'controller' => 'App\\Http\\Controllers\\LanguageController@changeLanguage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'language.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dich-vu.giao-hang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dich-vu/giao-hang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@dichVuGiaoHang',
        'controller' => 'App\\Http\\Controllers\\PageController@dichVuGiaoHang',
        'as' => 'dich-vu.giao-hang',
        'namespace' => NULL,
        'prefix' => '/dich-vu',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dich-vu.xe-tai' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dich-vu/xe-tai',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@dichVuXeTai',
        'controller' => 'App\\Http\\Controllers\\PageController@dichVuXeTai',
        'as' => 'dich-vu.xe-tai',
        'namespace' => NULL,
        'prefix' => '/dich-vu',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dich-vu.chuyen-nha' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dich-vu/chuyen-nha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@dichVuChuyenNha',
        'controller' => 'App\\Http\\Controllers\\PageController@dichVuChuyenNha',
        'as' => 'dich-vu.chuyen-nha',
        'namespace' => NULL,
        'prefix' => '/dich-vu',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dich-vu.doanh-nghiep' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dich-vu/doanh-nghiep',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@dichVuDoanhNghiep',
        'controller' => 'App\\Http\\Controllers\\PageController@dichVuDoanhNghiep',
        'as' => 'dich-vu.doanh-nghiep',
        'namespace' => NULL,
        'prefix' => '/dich-vu',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'khach-hang.ca-nhan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'khach-hang/ca-nhan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@khachHangCaNhan',
        'controller' => 'App\\Http\\Controllers\\PageController@khachHangCaNhan',
        'as' => 'khach-hang.ca-nhan',
        'namespace' => NULL,
        'prefix' => '/khach-hang',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'khach-hang.doanh-nghiep' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'khach-hang/doanh-nghiep',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@khachHangDoanhNghiep',
        'controller' => 'App\\Http\\Controllers\\PageController@khachHangDoanhNghiep',
        'as' => 'khach-hang.doanh-nghiep',
        'namespace' => NULL,
        'prefix' => '/khach-hang',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ho-tro.khach-hang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ho-tro/khach-hang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@hoTroKhachHang',
        'controller' => 'App\\Http\\Controllers\\PageController@hoTroKhachHang',
        'as' => 'ho-tro.khach-hang',
        'namespace' => NULL,
        'prefix' => '/ho-tro',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ho-tro.tai-xe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ho-tro/tai-xe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@hoTroTaiXe',
        'controller' => 'App\\Http\\Controllers\\PageController@hoTroTaiXe',
        'as' => 'ho-tro.tai-xe',
        'namespace' => NULL,
        'prefix' => '/ho-tro',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tai-xe.dang-ky' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tai-xe/dang-ky',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@dangKyTaiXe',
        'controller' => 'App\\Http\\Controllers\\PageController@dangKyTaiXe',
        'as' => 'tai-xe.dang-ky',
        'namespace' => NULL,
        'prefix' => '/tai-xe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tai-xe.cong-dong' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tai-xe/cong-dong',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@congDongTaiXe',
        'controller' => 'App\\Http\\Controllers\\PageController@congDongTaiXe',
        'as' => 'tai-xe.cong-dong',
        'namespace' => NULL,
        'prefix' => '/tai-xe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tai-xe.cam-nang' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tai-xe/cam-nang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@camNangTaiXe',
        'controller' => 'App\\Http\\Controllers\\PageController@camNangTaiXe',
        'as' => 'tai-xe.cam-nang',
        'namespace' => NULL,
        'prefix' => '/tai-xe',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tuyen-dung.ve-chung-toi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tuyen-dung/ve-chung-toi',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@veChungToi',
        'controller' => 'App\\Http\\Controllers\\PageController@veChungToi',
        'as' => 'tuyen-dung.ve-chung-toi',
        'namespace' => NULL,
        'prefix' => '/tuyen-dung',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tuyen-dung.cau-chuyen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tuyen-dung/cau-chuyen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@cauChuyenCourierXpress',
        'controller' => 'App\\Http\\Controllers\\PageController@cauChuyenCourierXpress',
        'as' => 'tuyen-dung.cau-chuyen',
        'namespace' => NULL,
        'prefix' => '/tuyen-dung',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tuyen-dung.gia-nhap' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tuyen-dung/gia-nhap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@giaNhapCourierXpress',
        'controller' => 'App\\Http\\Controllers\\PageController@giaNhapCourierXpress',
        'as' => 'tuyen-dung.gia-nhap',
        'namespace' => NULL,
        'prefix' => '/tuyen-dung',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cong-dong.ho-tro' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cong-dong/ho-tro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PageController@congDongHoTro',
        'controller' => 'App\\Http\\Controllers\\PageController@congDongHoTro',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cong-dong.ho-tro',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@adminDashboard',
        'controller' => 'App\\Http\\Controllers\\DashboardController@adminDashboard',
        'as' => 'admin.dashboard',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function() { return \\view(\'admin.tracking\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007240000000000000000";}}',
        'as' => 'admin.tracking',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function() { return \\view(\'admin.users.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007260000000000000000";}}',
        'as' => 'admin.users',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function() { return \\view(\'admin.orders.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007280000000000000000";}}',
        'as' => 'admin.orders',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function() { return \\view(\'admin.agents.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000072a0000000000000000";}}',
        'as' => 'admin.agents',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.shippers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:52:"function() { return \\view(\'admin.shippers.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000072c0000000000000000";}}',
        'as' => 'admin.shippers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@index',
        'as' => 'admin.settings',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:51:"function() { return \\view(\'admin.reports.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000072f0000000000000000";}}',
        'as' => 'admin.reports',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.audit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/audit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuditLogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuditLogController@index',
        'as' => 'admin.audit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getStats',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getStats',
        'as' => 'admin.api.',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::NAjXrFK9LGf1rFa8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/recent-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getRecentOrders',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getRecentOrders',
        'as' => 'admin.api.generated::NAjXrFK9LGf1rFa8',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::OG0MALpqRH8p7vyo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DashboardController@getSystemActivity',
        'controller' => 'App\\Http\\Controllers\\Admin\\DashboardController@getSystemActivity',
        'as' => 'admin.api.generated::OG0MALpqRH8p7vyo',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::snaCRi1o4ggY8lxC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@getSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@getSettings',
        'as' => 'admin.api.generated::snaCRi1o4ggY8lxC',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::piC45wR81ZQp4KRd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@updateSettings',
        'as' => 'admin.api.generated::piC45wR81ZQp4KRd',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::FTR0xAmtIZyXZdj3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/api/settings/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@resetSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@resetSettings',
        'as' => 'admin.api.generated::FTR0xAmtIZyXZdj3',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::YjVEBbxQyJEGIEjC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/settings/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@exportSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@exportSettings',
        'as' => 'admin.api.generated::YjVEBbxQyJEGIEjC',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::Lv3yRbaq9qoCEoPP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/api/settings/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingsController@importSettings',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingsController@importSettings',
        'as' => 'admin.api.generated::Lv3yRbaq9qoCEoPP',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::TkTotzqlvw8LAz8u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/audit/logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuditLogController@getLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuditLogController@getLogs',
        'as' => 'admin.api.generated::TkTotzqlvw8LAz8u',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::tvcDKivOWe8DdjDb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/audit/logs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuditLogController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuditLogController@show',
        'as' => 'admin.api.generated::tvcDKivOWe8DdjDb',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::JLxwOYVanYyJv6d0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/audit/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuditLogController@getStatistics',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuditLogController@getStatistics',
        'as' => 'admin.api.generated::JLxwOYVanYyJv6d0',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.api.generated::ymxnVG2GZu47npbE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/api/audit/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AuditLogController@exportLogs',
        'controller' => 'App\\Http\\Controllers\\Admin\\AuditLogController@exportLogs',
        'as' => 'admin.api.generated::ymxnVG2GZu47npbE',
        'namespace' => NULL,
        'prefix' => 'admin/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Agent\\DashboardController@index',
        'as' => 'agent.dashboard',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@index',
        'as' => 'agent.orders',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Agent\\OrderController@show',
        'as' => 'agent.orders.show',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.shippers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ShipperController@index',
        'controller' => 'App\\Http\\Controllers\\Agent\\ShipperController@index',
        'as' => 'agent.shippers',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ReportController@index',
        'controller' => 'App\\Http\\Controllers\\Agent\\ReportController@index',
        'as' => 'agent.reports',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.reports.export' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/reports/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\ReportController@export',
        'controller' => 'App\\Http\\Controllers\\Agent\\ReportController@export',
        'as' => 'agent.reports.export',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@userDashboard',
        'controller' => 'App\\Http\\Controllers\\DashboardController@userDashboard',
        'as' => 'user.dashboard',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:45:"function() { return \\view(\'user.tracking\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007450000000000000000";}}',
        'as' => 'user.tracking',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.create-order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function() { return \\view(\'user.create-order\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007470000000000000000";}}',
        'as' => 'user.create-order',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function() { return \\view(\'user.profile\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007490000000000000000";}}',
        'as' => 'user.profile',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:612:"function() { 
            $user = \\auth()->user();
            
            if (!$user || $user->role !== \'user\') {
                return \\redirect(\'/login\');
            }
            
            // Lấy tất cả đơn hàng của user với relationship shipper
            $orders = \\App\\Models\\Order::where(\'user_id\', $user->id)
                                     ->with(\'shipper:id,name,phone\')
                                     ->orderBy(\'created_at\', \'desc\')
                                     ->get();
            
            return \\view(\'user.orders.index\', \\compact(\'orders\')); 
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000074b0000000000000000";}}',
        'as' => 'user.orders',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/api/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@getUserStats',
        'controller' => 'App\\Http\\Controllers\\DashboardController@getUserStats',
        'as' => 'user.api.',
        'namespace' => NULL,
        'prefix' => 'user/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.api.generated::KyVvDPeJh6ORfzCt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/api/recent-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:user',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@getUserRecentOrders',
        'controller' => 'App\\Http\\Controllers\\DashboardController@getUserRecentOrders',
        'as' => 'user.api.generated::KyVvDPeJh6ORfzCt',
        'namespace' => NULL,
        'prefix' => 'user/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function() { return \\view(\'agent.tracking\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000074e0000000000000000";}}',
        'as' => 'agent.tracking',
        'namespace' => NULL,
        'prefix' => '/agent',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/api/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\DashboardController@getStats',
        'controller' => 'App\\Http\\Controllers\\Agent\\DashboardController@getStats',
        'as' => 'agent.api.',
        'namespace' => NULL,
        'prefix' => 'agent/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.api.generated::dvCgPw47xPgurLxI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/api/pending-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\DashboardController@getPendingOrders',
        'controller' => 'App\\Http\\Controllers\\Agent\\DashboardController@getPendingOrders',
        'as' => 'agent.api.generated::dvCgPw47xPgurLxI',
        'namespace' => NULL,
        'prefix' => 'agent/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'agent.api.generated::kCezOdhBzO2ofTwJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'agent/api/shippers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:agent',
        ),
        'uses' => 'App\\Http\\Controllers\\Agent\\DashboardController@getShippers',
        'controller' => 'App\\Http\\Controllers\\Agent\\DashboardController@getShippers',
        'as' => 'agent.api.generated::kCezOdhBzO2ofTwJ',
        'namespace' => NULL,
        'prefix' => 'agent/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@index',
        'as' => 'shipper.dashboard',
        'namespace' => NULL,
        'prefix' => '/shipper',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.tracking' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/tracking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function() { return \\view(\'shipper.tracking\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007530000000000000000";}}',
        'as' => 'shipper.tracking',
        'namespace' => NULL,
        'prefix' => '/shipper',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@index',
        'as' => 'shipper.orders',
        'namespace' => NULL,
        'prefix' => '/shipper',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@index',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@index',
        'as' => 'shipper.history',
        'namespace' => NULL,
        'prefix' => '/shipper',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/dashboard-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDashboardData',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDashboardData',
        'as' => 'shipper.api.',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::aCpqWUvMewi0ibHq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/current-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getCurrentOrders',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getCurrentOrders',
        'as' => 'shipper.api.generated::aCpqWUvMewi0ibHq',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::SuSPDl9bJEYEQctv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getStatistics',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getStatistics',
        'as' => 'shipper.api.generated::SuSPDl9bJEYEQctv',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::VGrEaVvCsAaFoFJ1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/recent-activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getRecentActivities',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getRecentActivities',
        'as' => 'shipper.api.generated::VGrEaVvCsAaFoFJ1',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::EmaGdBApI68JeP68' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/daily-performance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDailyPerformance',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@getDailyPerformance',
        'as' => 'shipper.api.generated::EmaGdBApI68JeP68',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::MX94K636RkvEX6BJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shipper/api/update-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateLocation',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateLocation',
        'as' => 'shipper.api.generated::MX94K636RkvEX6BJ',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::wisnU1DVhegnPyW1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shipper/api/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Shipper\\DashboardController@updateStatus',
        'as' => 'shipper.api.generated::wisnU1DVhegnPyW1',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::6LLGftcafOjYzYhr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'as' => 'shipper.api.generated::6LLGftcafOjYzYhr',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::Mkr4RPOuZI9oWLfE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/orders/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrders',
        'as' => 'shipper.api.generated::Mkr4RPOuZI9oWLfE',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::kzsJqWhrAa598mtJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrderDetails',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@getOrderDetails',
        'as' => 'shipper.api.generated::kzsJqWhrAa598mtJ',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::3uVkSx9jBxIERhYH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shipper/api/orders/{id}/update-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\OrderController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Shipper\\OrderController@updateStatus',
        'as' => 'shipper.api.generated::3uVkSx9jBxIERhYH',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::WYpS2oomCqBdz5om' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/delivery-history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryHistory',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryHistory',
        'as' => 'shipper.api.generated::WYpS2oomCqBdz5om',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::twkfJ0cW1PKqYQu5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/delivery-statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryStatistics',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryStatistics',
        'as' => 'shipper.api.generated::twkfJ0cW1PKqYQu5',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shipper.api.generated::VKNkRUPwhtbUJ7zh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shipper/api/delivery-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:shipper',
        ),
        'uses' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryDetails',
        'controller' => 'App\\Http\\Controllers\\Shipper\\HistoryController@getDeliveryDetails',
        'as' => 'shipper.api.generated::VKNkRUPwhtbUJ7zh',
        'namespace' => NULL,
        'prefix' => 'shipper/api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2leeN2GBezEegbp8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/agent/reports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:510:"function() {
        // Simulate agent authentication
        $user = new \\App\\Models\\User([
            \'id\' => 2,
            \'name\' => \'Agent Hà Nội\',
            \'email\' => \'agent@test.com\',
            \'role\' => \'agent\',
            \'status\' => \'active\',
            \'city\' => \'Hà Nội\'
        ]);
        
        // Manually authenticate the user for testing
        \\auth()->login($user);
        
        return \\app(\\App\\Http\\Controllers\\Agent\\ReportController::class)->index(\\request());
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007110000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2leeN2GBezEegbp8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cnsmWZW6UEK1GwEE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/agent/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:421:"function() {
        // Simulate user authentication
        $user = new \\App\\Models\\User([
            \'id\' => 1,
            \'name\' => \'Nguyễn Văn Nam\',
            \'email\' => \'user@test.com\',
            \'role\' => \'user\',
            \'status\' => \'active\'
        ]);
        
        // Manually authenticate the user for testing
        \\auth()->login($user);
        
        return \\view(\'user.dashboard\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007210000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cnsmWZW6UEK1GwEE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xy1YZfD4Bm1mN0DV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/user/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:424:"function() {
        // Simulate user authentication
        $user = new \\App\\Models\\User([
            \'id\' => 1,
            \'name\' => \'Nguyễn Văn Nam\',
            \'email\' => \'user@test.com\',
            \'role\' => \'user\',
            \'status\' => \'active\'
        ]);
        
        // Manually authenticate the user for testing
        \\auth()->login($user);
        
        return \\view(\'user.orders.index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000075a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Xy1YZfD4Bm1mN0DV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qgaSULAOc2ZW9mB7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/user/create-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:424:"function() {
        // Simulate user authentication
        $user = new \\App\\Models\\User([
            \'id\' => 1,
            \'name\' => \'Nguyễn Văn Nam\',
            \'email\' => \'user@test.com\',
            \'role\' => \'user\',
            \'status\' => \'active\'
        ]);
        
        // Manually authenticate the user for testing
        \\auth()->login($user);
        
        return \\view(\'user.create-order\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000076a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qgaSULAOc2ZW9mB7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fjXVdgK2Bg1DT5bn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:419:"function() {
        // Simulate user authentication
        $user = new \\App\\Models\\User([
            \'id\' => 1,
            \'name\' => \'Nguyễn Văn Nam\',
            \'email\' => \'user@test.com\',
            \'role\' => \'user\',
            \'status\' => \'active\'
        ]);
        
        // Manually authenticate the user for testing
        \\auth()->login($user);
        
        return \\view(\'user.profile\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000076c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fjXVdgK2Bg1DT5bn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () { return \\view(\'language-demo\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007700000000000000000";}}',
        'as' => 'demo.language',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.full' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/full-demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () { return \\view(\'full-translation-demo\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007720000000000000000";}}',
        'as' => 'demo.full',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.complete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/complete-demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () { return \\view(\'services.complete-demo\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007740000000000000000";}}',
        'as' => 'demo.complete',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.individual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/individual-complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () { return \\view(\'customers.individual-complete\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007760000000000000000";}}',
        'as' => 'demo.individual',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/all-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () { return \\view(\'all-services-translated\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007780000000000000000";}}',
        'as' => 'demo.services',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.fedex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/fedex-style',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function () { return \\view(\'fedex-style-demo\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000077a0000000000000000";}}',
        'as' => 'demo.fedex',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.lalamove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/lalamove-style',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:47:"function () { return \\view(\'lalamove-style\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000077c0000000000000000";}}',
        'as' => 'demo.lalamove',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.header' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/header-demo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () { return \\view(\'header-demo\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000077e0000000000000000";}}',
        'as' => 'demo.header',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'demo.dropdown' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'demo/dropdown-test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () { return \\view(\'dropdown-test\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007800000000000000000";}}',
        'as' => 'demo.dropdown',
        'namespace' => NULL,
        'prefix' => '/demo',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.test' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function () {
            return \'Server hoạt động tốt! CourierXpress đã sẵn sàng.\';
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007820000000000000000";}}',
        'as' => 'dev.test',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.accounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test-accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
            return \\view(\'test-accounts\');
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007840000000000000000";}}',
        'as' => 'dev.accounts',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.phpinfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
            return \\phpinfo();
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007860000000000000000";}}',
        'as' => 'dev.phpinfo',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.add-address-column' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/add-address-column',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1092:"function () {
            try {
                // Check if address column exists
                if (!\\Illuminate\\Support\\Facades\\Schema::hasColumn(\'users\', \'address\')) {
                    \\Illuminate\\Support\\Facades\\Schema::table(\'users\', function (\\Illuminate\\Database\\Schema\\Blueprint $table) {
                        $table->text(\'address\')->nullable()->after(\'city\');
                    });
                    return \\response()->json([
                        \'success\' => true,
                        \'message\' => \'Address column added successfully to users table\'
                    ]);
                } else {
                    return \\response()->json([
                        \'success\' => true,
                        \'message\' => \'Address column already exists in users table\'
                    ]);
                }
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Error adding address column: \' . $e->getMessage()
                ]);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007880000000000000000";}}',
        'as' => 'dev.add-address-column',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.test-shippers-api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test-shippers-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2347:"function () {
            try {
                $shippers = \\App\\Models\\User::where(\'role\', \'shipper\')
                          ->select([\'id\', \'name\', \'email\', \'phone\', \'status\', \'address\', \'city\', \'created_at\'])
                          ->orderBy(\'created_at\', \'desc\')
                          ->get()
                          ->map(function ($shipper) {
                              // Calculate statistics từ MySQL
                              $totalOrders = \\App\\Models\\Order::where(\'shipper_id\', $shipper->id)->count();
                              $completedOrders = \\App\\Models\\Order::where(\'shipper_id\', $shipper->id)
                                                    ->where(\'status\', \'delivered\')
                                                    ->count();
                              $successRate = $totalOrders > 0 ? \\round(($completedOrders / $totalOrders) * 100, 1) : 0;

                              return [
                                  \'id\' => $shipper->id,
                                  \'name\' => $shipper->name,
                                  \'email\' => $shipper->email,
                                  \'phone\' => $shipper->phone ?? \'Chưa cập nhật\',
                                  \'area\' => $shipper->city ?? \'Miền Nam\', // Sử dụng city làm area
                                  \'rating\' => \\rand(40, 50) / 10, // Random rating 4.0-5.0
                                  \'status\' => $shipper->status ?? \'active\',
                                  \'total_orders\' => $totalOrders,
                                  \'success_rate\' => $successRate,
                                  \'vehicle_type\' => \'motorcycle\',
                                  \'vehicle_number\' => \'Chưa cập nhật\',
                                  \'avatar\' => \'/images/default-avatar.png\'
                              ];
                          });

                return \\response()->json($shippers);
                
            } catch (\\Exception $e) {
                \\Log::error(\'Test Shippers API error: \' . $e->getMessage());
                
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi tải danh sách shippers: \' . $e->getMessage(),
                    \'data\' => []
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078a0000000000000000";}}',
        'as' => 'dev.test-shippers-api',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.test-agents-api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test-agents-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1489:"function () {
            try {
                $agents = \\App\\Models\\User::where(\'role\', \'agent\')
                         ->select([\'id\', \'name\', \'email\', \'phone\', \'address\', \'status\', \'city\', \'created_at\'])
                         ->orderBy(\'created_at\', \'desc\')
                         ->get()
                         ->map(function ($agent) {
                             return [
                                 \'id\' => $agent->id,
                                 \'name\' => $agent->name,
                                 \'address\' => $agent->address ?? \'Chưa cập nhật\',
                                 \'manager\' => $agent->name, // Tên quản lý = tên agent
                                 \'phone\' => $agent->phone ?? \'Chưa cập nhật\',
                                 \'email\' => $agent->email,
                                 \'status\' => $agent->status ?? \'active\',
                                 \'created_at\' => $agent->created_at->format(\'d/m/Y\')
                             ];
                         });

                return \\response()->json($agents);
                
            } catch (\\Exception $e) {
                \\Log::error(\'Test Agents API error: \' . $e->getMessage());
                
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi tải danh sách agents: \' . $e->getMessage(),
                    \'data\' => []
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078c0000000000000000";}}',
        'as' => 'dev.test-agents-api',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.test-reports-api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test-reports-api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2601:"function () {
            try {
                // Lấy dữ liệu thống kê từ MySQL
                $totalOrders = \\App\\Models\\Order::count();
                $completedOrders = \\App\\Models\\Order::where(\'status\', \'delivered\')->count();
                $totalRevenue = \\App\\Models\\Order::where(\'status\', \'delivered\')->sum(\'total_fee\') ?? 0;
                $avgOrderValue = $completedOrders > 0 ? $totalRevenue / $completedOrders : 0;
                $successRate = $totalOrders > 0 ? \\round(($completedOrders / $totalOrders) * 100, 1) : 0;

                // Tạo dữ liệu chart cho 7 ngày qua
                $chartLabels = [];
                $revenueData = [];
                $completedData = [];
                $failedData = [];

                for ($i = 6; $i >= 0; $i--) {
                    $date = \\Carbon\\Carbon::now()->subDays($i);
                    $chartLabels[] = $date->format(\'d/m\');
                    
                    $dayRevenue = \\rand(1000000, 5000000); // Mock data
                    $revenueData[] = $dayRevenue;
                    
                    $dayCompleted = \\rand(10, 50);
                    $completedData[] = $dayCompleted;
                    
                    $dayFailed = \\rand(2, 10);
                    $failedData[] = $dayFailed;
                }

                return \\response()->json([
                    \'success\' => true,
                    \'summary\' => [
                        \'total_revenue\' => $totalRevenue,
                        \'total_orders\' => $totalOrders,
                        \'average_order_value\' => $avgOrderValue,
                        \'success_rate\' => $successRate
                    ],
                    \'revenue_chart\' => [
                        \'labels\' => $chartLabels,
                        \'data\' => $revenueData
                    ],
                    \'orders_chart\' => [
                        \'labels\' => $chartLabels,
                        \'completed\' => $completedData,
                        \'failed\' => $failedData
                    ],
                    \'area_performance\' => [85, 92, 78],
                    \'shipper_performance\' => [],
                    \'daily_statistics\' => []
                ]);
                
            } catch (\\Exception $e) {
                \\Log::error(\'Test Reports API error: \' . $e->getMessage());
                
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi tải báo cáo: \' . $e->getMessage()
                ], 500);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000078e0000000000000000";}}',
        'as' => 'dev.test-reports-api',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.admin-data-summary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/admin-data-summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1756:"function () {
            try {
                $totalUsers = \\App\\Models\\User::count();
                $totalAgents = \\App\\Models\\User::where(\'role\', \'agent\')->count();
                $totalShippers = \\App\\Models\\User::where(\'role\', \'shipper\')->count();
                $totalOrders = \\App\\Models\\Order::count();
                $completedOrders = \\App\\Models\\Order::where(\'status\', \'delivered\')->count();
                $totalRevenue = \\App\\Models\\Order::where(\'status\', \'delivered\')->sum(\'total_fee\') ?? 0;
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Admin data summary from MySQL\',
                    \'data\' => [
                        \'total_users\' => $totalUsers,
                        \'total_agents\' => $totalAgents,
                        \'total_shippers\' => $totalShippers,
                        \'total_orders\' => $totalOrders,
                        \'completed_orders\' => $completedOrders,
                        \'total_revenue\' => \\number_format($totalRevenue, 0, \',\', \'.\') . \' VNĐ\',
                        \'database_connection\' => \'MySQL kết nối thành công!\',
                        \'test_endpoints\' => [
                            \'agents\' => \'/dev/test-agents-api\',
                            \'shippers\' => \'/dev/test-shippers-api\',
                            \'reports\' => \'/dev/test-reports-api\'
                        ]
                    ]
                ]);
                
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Lỗi kết nối database: \' . $e->getMessage()
                ]);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007900000000000000000";}}',
        'as' => 'dev.admin-data-summary',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.create-sample-orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/create-sample-orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:3658:"function () {
            try {
                // Tạo một số đơn hàng mẫu
                $user = \\App\\Models\\User::where(\'role\', \'user\')->first();
                $agent = \\App\\Models\\User::where(\'role\', \'agent\')->first();
                $shipper = \\App\\Models\\User::where(\'role\', \'shipper\')->first();
                
                if (!$user) {
                    // Tạo user mẫu nếu chưa có
                    $user = \\App\\Models\\User::create([
                        \'name\' => \'Nguyễn Văn A\',
                        \'email\' => \'user1@example.com\',
                        \'phone\' => \'0123456789\',
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                        \'role\' => \'user\',
                        \'status\' => \'active\'
                    ]);
                }
                
                $orders = [];
                for ($i = 1; $i <= 10; $i++) {
                    $status = [\'pending\', \'confirmed\', \'picked_up\', \'in_transit\', \'delivered\'][\\rand(0, 4)];
                    $fee = \\rand(25000, 150000);
                    $trackingNumber = \'CX\' . \\str_pad(\\time() + $i, 8, \'0\', STR_PAD_LEFT);
                    
                    $order = \\App\\Models\\Order::create([
                        \'tracking_number\' => $trackingNumber,
                        \'user_id\' => $user->id,
                        \'agent_id\' => $agent ? $agent->id : null,
                        \'shipper_id\' => $shipper ? $shipper->id : null,
                        \'pickup_name\' => \'Người gửi \' . $i,
                        \'pickup_phone\' => \'091234567\' . $i,
                        \'pickup_address\' => \'Số \' . ($i * 10) . \' Đường ABC, Hà Nội\',
                        \'pickup_ward\' => \'Phường 1\',
                        \'pickup_district\' => \'Quận Ba Đình\',
                        \'pickup_city\' => \'Hà Nội\',
                        \'delivery_name\' => \'Người nhận \' . $i,
                        \'delivery_phone\' => \'098765432\' . $i,
                        \'delivery_address\' => \'Số \' . ($i * 15) . \' Đường XYZ, TP.HCM\',
                        \'delivery_ward\' => \'Phường 1\',
                        \'delivery_district\' => \'Quận 1\',
                        \'delivery_city\' => \'TP.HCM\',
                        \'package_type\' => \'document\',
                        \'weight\' => \\rand(1, 5),
                        \'length\' => 20,
                        \'width\' => 15,
                        \'height\' => 5,
                        \'value\' => \\rand(100000, 1000000),
                        \'cod_amount\' => \\rand(0, 500000),
                        \'shipping_fee\' => 25000,
                        \'insurance_fee\' => 0,
                        \'total_fee\' => $fee,
                        \'status\' => $status,
                        \'payment_method\' => \'cash\',
                        \'payment_status\' => $status === \'delivered\' ? \'paid\' : \'pending\',
                        \'created_at\' => \\now()->subDays(\\rand(0, 30))
                    ]);
                    
                    $orders[] = $order->tracking_number;
                }
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Sample orders created successfully\',
                    \'orders\' => $orders
                ]);
                
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Error creating sample orders: \' . $e->getMessage()
                ]);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007920000000000000000";}}',
        'as' => 'dev.create-sample-orders',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.create-sample-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/create-sample-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2979:"function () {
            try {
                // Create sample agents
                $agent1 = \\App\\Models\\User::firstOrCreate([
                    \'email\' => \'agent1@courierxpress.com\'
                ], [
                    \'name\' => \'Chi nhánh Hà Nội\',
                    \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                    \'role\' => \'agent\',
                    \'status\' => \'active\',
                    \'phone\' => \'0123456789\',
                    \'address\' => \'123 Đường ABC, Quận Ba Đình, Hà Nội\',
                    \'city\' => \'Hà Nội\'
                ]);
                
                $agent2 = \\App\\Models\\User::firstOrCreate([
                    \'email\' => \'agent2@courierxpress.com\'
                ], [
                    \'name\' => \'Chi nhánh TP.HCM\',
                    \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                    \'role\' => \'agent\',
                    \'status\' => \'active\',
                    \'phone\' => \'0987654321\',
                    \'address\' => \'456 Đường XYZ, Quận 1, TP.HCM\',
                    \'city\' => \'TP.HCM\'
                ]);
                
                // Create sample shippers
                $shipper1 = \\App\\Models\\User::firstOrCreate([
                    \'email\' => \'shipper1@courierxpress.com\'
                ], [
                    \'name\' => \'Nguyễn Văn Tài\',
                    \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                    \'role\' => \'shipper\',
                    \'status\' => \'active\',
                    \'phone\' => \'0912345678\',
                    \'address\' => \'789 Đường DEF, Quận Cầu Giấy, Hà Nội\',
                    \'city\' => \'Hà Nội\'
                ]);
                
                $shipper2 = \\App\\Models\\User::firstOrCreate([
                    \'email\' => \'shipper2@courierxpress.com\'
                ], [
                    \'name\' => \'Lê Thị Hoa\',
                    \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                    \'role\' => \'shipper\',
                    \'status\' => \'active\',
                    \'phone\' => \'0934567890\',
                    \'address\' => \'321 Đường GHI, Quận 3, TP.HCM\',
                    \'city\' => \'TP.HCM\'
                ]);
                
                return \\response()->json([
                    \'success\' => true,
                    \'message\' => \'Sample data created successfully\',
                    \'data\' => [
                        \'agents\' => [$agent1->name, $agent2->name],
                        \'shippers\' => [$shipper1->name, $shipper2->name]
                    ]
                ]);
                
            } catch (\\Exception $e) {
                return \\response()->json([
                    \'success\' => false,
                    \'message\' => \'Error creating sample data: \' . $e->getMessage()
                ]);
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007940000000000000000";}}',
        'as' => 'dev.create-sample-data',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.init-admin-data' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/init-admin-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:6050:"function () {
            try {
                // Tạo admin user nếu chưa có
                $admin = \\App\\Models\\User::firstOrCreate([
                    \'email\' => \'admin@courierxpress.com\'
                ], [
                    \'name\' => \'Admin CourierXpress\',
                    \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                    \'role\' => \'admin\',
                    \'status\' => \'active\',
                    \'phone\' => \'0123456789\'
                ]);
                
                // Tạo một số agents
                for ($i = 1; $i <= 3; $i++) {
                    \\App\\Models\\User::firstOrCreate([
                        \'email\' => "agent{$i}@courierxpress.com"
                    ], [
                        \'name\' => "Agent {$i}",
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                        \'role\' => \'agent\',
                        \'status\' => \'active\',
                        \'phone\' => "09{$i}234567{$i}"
                    ]);
                }
                
                // Tạo một số shippers
                for ($i = 1; $i <= 5; $i++) {
                    \\App\\Models\\User::firstOrCreate([
                        \'email\' => "shipper{$i}@courierxpress.com"
                    ], [
                        \'name\' => "Shipper {$i}",
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                        \'role\' => \'shipper\',
                        \'status\' => \'active\',
                        \'phone\' => "08{$i}345678{$i}",
                        \'is_online\' => $i <= 3
                    ]);
                }
                
                // Tạo một số users
                for ($i = 1; $i <= 10; $i++) {
                    \\App\\Models\\User::firstOrCreate([
                        \'email\' => "user{$i}@example.com"
                    ], [
                        \'name\' => "Khách hàng {$i}",
                        \'password\' => \\Illuminate\\Support\\Facades\\Hash::make(\'123456\'),
                        \'role\' => \'user\',
                        \'status\' => \'active\',
                        \'phone\' => "07{$i}567890{$i}"
                    ]);
                }
                
                // Tạo một số orders mẫu
                $users = \\App\\Models\\User::where(\'role\', \'user\')->take(5)->get();
                $shippers = \\App\\Models\\User::where(\'role\', \'shipper\')->take(3)->get();
                $agents = \\App\\Models\\User::where(\'role\', \'agent\')->take(2)->get();
                
                if ($users->count() > 0 && \\App\\Models\\Order::count() < 10) {
                    $statuses = [\'pending\', \'confirmed\', \'assigned\', \'in_transit\', \'delivered\', \'cancelled\'];
                    
                    for ($i = 1; $i <= 15; $i++) {
                        $user = $users->random();
                        $shipper = $shippers->isNotEmpty() ? $shippers->random() : null;
                        $agent = $agents->isNotEmpty() ? $agents->random() : null;
                        $status = $statuses[\\array_rand($statuses)];
                        
                        \\App\\Models\\Order::create([
                            \'tracking_number\' => \'CX\' . \\str_pad($i, 6, \'0\', STR_PAD_LEFT),
                            \'user_id\' => $user->id,
                            \'shipper_id\' => $shipper ? $shipper->id : null,
                            \'agent_id\' => $agent ? $agent->id : null,
                            \'pickup_name\' => \'Người gửi \' . $i,
                            \'pickup_phone\' => \'0987654321\',
                            \'pickup_address\' => "Địa chỉ lấy hàng {$i}",
                            \'pickup_ward\' => \'Phường \' . $i,
                            \'pickup_district\' => \'Quận \' . ($i % 5 + 1),
                            \'pickup_city\' => \'Hồ Chí Minh\',
                            \'delivery_name\' => \'Người nhận \' . $i,
                            \'delivery_phone\' => \'0123456789\',
                            \'delivery_address\' => "Địa chỉ giao hàng {$i}",
                            \'delivery_ward\' => \'Phường \' . ($i + 1),
                            \'delivery_district\' => \'Quận \' . ($i % 7 + 1),
                            \'delivery_city\' => \'Hồ Chí Minh\',
                            \'package_type\' => [\'standard\', \'express\', \'economy\'][\\array_rand([\'standard\', \'express\', \'economy\'])],
                            \'weight\' => \\rand(1, 50) / 10,
                            \'cod_amount\' => \\rand(0, 5000000),
                            \'shipping_fee\' => \\rand(20000, 100000),
                            \'total_fee\' => \\rand(20000, 150000),
                            \'status\' => $status,
                            \'payment_method\' => \'cod\',
                            \'payment_status\' => \'pending\',
                            \'notes\' => "Ghi chú đơn hàng {$i}",
                            \'created_at\' => \\now()->subDays(\\rand(0, 30)),
                            \'assigned_at\' => \\in_array($status, [\'assigned\', \'in_transit\', \'delivered\']) ? \\now()->subDays(\\rand(0, 5)) : null,
                            \'completed_at\' => $status === \'delivered\' ? \\now()->subDays(\\rand(0, 2)) : null,
                        ]);
                    }
                }
                
                $totalUsers = \\App\\Models\\User::count();
                $totalOrders = \\App\\Models\\Order::count();
                
                return "<h1>Dữ liệu admin đã được tạo thành công!</h1>
                       <p>Tổng users: {$totalUsers}</p>
                       <p>Tổng orders: {$totalOrders}</p>
                       <p>Admin login: admin@courierxpress.com / 123456</p>
                       <p><a href=\'/admin/dashboard\'>Vào Admin Dashboard</a></p>";
                       
            } catch (\\Exception $e) {
                return "Lỗi tạo dữ liệu: " . $e->getMessage();
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007960000000000000000";}}',
        'as' => 'dev.init-admin-data',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dev.test-db-connection' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dev/test-db-connection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:2460:"function () {
            try {
                // Test database connection
                $connection = \\DB::connection()->getPDO();
                $dbName = \\DB::connection()->getDatabaseName();
                
                // Test tables exist
                $tables = \\DB::select("SHOW TABLES");
                $tableNames = \\array_map(function($table) {
                    return \\reset($table);
                }, $tables);
                
                // Test User model
                $userCount = \\App\\Models\\User::count();
                $adminCount = \\App\\Models\\User::where(\'role\', \'admin\')->count();
                $agentCount = \\App\\Models\\User::where(\'role\', \'agent\')->count();
                $shipperCount = \\App\\Models\\User::where(\'role\', \'shipper\')->count();
                
                // Test Order model
                $orderCount = \\App\\Models\\Order::count();
                $pendingOrders = \\App\\Models\\Order::where(\'status\', \'pending\')->count();
                $deliveredOrders = \\App\\Models\\Order::where(\'status\', \'delivered\')->count();
                
                return "<h1>Test Kết nối Database Thành Công!</h1>
                       <h2>Database Info:</h2>
                       <p>Database: {$dbName}</p>
                       <p>Tables: " . \\count($tableNames) . " bảng</p>
                       <p>Danh sách tables: " . \\implode(\', \', $tableNames) . "</p>
                       
                       <h2>User Statistics:</h2>
                       <p>Tổng users: {$userCount}</p>
                       <p>Admins: {$adminCount}</p>
                       <p>Agents: {$agentCount}</p>
                       <p>Shippers: {$shipperCount}</p>
                       
                       <h2>Order Statistics:</h2>
                       <p>Tổng orders: {$orderCount}</p>
                       <p>Pending orders: {$pendingOrders}</p>
                       <p>Delivered orders: {$deliveredOrders}</p>
                       
                       <h2>Actions:</h2>
                       <p><a href=\'/dev/init-admin-data\'>Tạo dữ liệu mẫu</a></p>
                       <p><a href=\'/admin/dashboard\'>Vào Admin Dashboard</a></p>";
                       
            } catch (\\Exception $e) {
                return "<h1>Lỗi kết nối Database!</h1><p>" . $e->getMessage() . "</p><p>Vui lòng kiểm tra XAMPP MySQL đã chạy chưa.</p>";
            }
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007980000000000000000";}}',
        'as' => 'dev.test-db-connection',
        'namespace' => NULL,
        'prefix' => '/dev',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:5:{s:6:"driver";s:5:"local";s:4:"root";s:49:"C:\\xampp\\htdocs\\CourierXpress\\storage\\app/private";s:5:"serve";b:1;s:5:"throw";b:0;s:6:"report";b:0;}s:12:"isProduction";b:0;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000076e0000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
