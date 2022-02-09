<?php

/** @var \Laravel\Lumen\Routing\Router $router */

# Reset state before starting tests
$router->post('/reset', function () {
    return response([], 200);
});

# Get balance for non-existing account
$router->get('/balance', 'AccountsController@show');

# Create account with initial balance
$router->post('/account', 'AccountsController@store');

# Deposit into existing account
$router->post('/event', 'EventsController@store');

# Withdraw from non-existing account and Withdraw from existing account
$router->post('/balance_out', 'AccountsController@balanceOut');

# Transfer from existing account and non-existing account
$router->post('/balance_transfer', 'AccountsController@balanceTransfer');
