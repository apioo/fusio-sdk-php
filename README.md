
# fusio-sdk-php

This [SDK](https://github.com/apioo/fusio-sdk-php) is managed by the [SDK Fabric](https://sdk-fabric.org/) project, a global infrastructure to
automatically generate SDKs for every API.

You can find more information about this SDK at [TypeHub](https://typehub.cloud/):
https://app.typehub.cloud/d/fusio/sdk

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \Fusio\Sdk\Client::build('[access_token]');

// Returns user data of the current authenticated user.
$response = $client->authorization()->getWhoami();

// Revoke the access token of the current authenticated user.
$response = $client->authorization()->revoke();

// Changes the password of the authenticated user.
$response = $client->backend()->account()->changePassword(new Backend_AccountChangePassword());

// Returns user data of the authenticated user.
$response = $client->backend()->account()->get();

// Updates user data of the authenticated user.
$response = $client->backend()->account()->update(new Backend_UserUpdate());

// Creates a new action.
$response = $client->backend()->action()->create(new Backend_ActionCreate());

// Deletes an existing action.
$response = $client->backend()->action()->delete('action_id');

// Executes a specific action.
$response = $client->backend()->action()->execute('action_id', new Backend_ActionExecuteRequest());

// Returns a specific action.
$response = $client->backend()->action()->get('action_id');

// Returns a paginated list of actions.
$response = $client->backend()->action()->getAll(1, 1, 'search');

// Returns all available action classes.
$response = $client->backend()->action()->getClasses();

// Returns a paginated list of action commits.
$response = $client->backend()->action()->getCommits('action_id', 1, 1, 'search');

// Returns the action config form.
$response = $client->backend()->action()->getForm('class');

// Updates an existing action.
$response = $client->backend()->action()->update('action_id', new Backend_ActionUpdate());

// Creates a new agent.
$response = $client->backend()->agent()->create(new Backend_AgentCreate());

// Deletes an existing agent.
$response = $client->backend()->agent()->delete('agent_id');

// Returns a specific agent.
$response = $client->backend()->agent()->get('agent_id');

// Returns a paginated list of agents.
$response = $client->backend()->agent()->getAll(1, 1, 'search');

// Returns available tools for an agent.
$response = $client->backend()->agent()->getTools();

// Returns a paginated list of agent messages.
$response = $client->backend()->agent()->message()->getAll('agent_id', 'chat_id');

// Submits a new agent message.
$response = $client->backend()->agent()->message()->submit('agent_id', new Agent_Input());

// Updates an existing agent.
$response = $client->backend()->agent()->update('agent_id', new Backend_AgentUpdate());

// Creates a new app.
$response = $client->backend()->app()->create(new Backend_AppCreate());

// Deletes an existing app.
$response = $client->backend()->app()->delete('app_id');

// Deletes an existing token from an app.
$response = $client->backend()->app()->deleteToken('app_id', 'token_id');

// Returns a specific app.
$response = $client->backend()->app()->get('app_id');

// Returns a paginated list of apps.
$response = $client->backend()->app()->getAll(1, 1, 'search');

// Updates an existing app.
$response = $client->backend()->app()->update('app_id', new Backend_AppUpdate());

// Returns a specific audit.
$response = $client->backend()->audit()->get('audit_id');

// Returns a paginated list of audits.
$response = $client->backend()->audit()->getAll(1, 1, 'search', 'from', 'to', 1, 1, 'event', 'ip', 'message');

// Generates an backup of the current system.
$response = $client->backend()->backup()->export();

// Imports an backup to the current system.
$response = $client->backend()->backup()->import(new Backend_BackupImport());

// Creates a new bundle.
$response = $client->backend()->bundle()->create(new Backend_BundleCreate());

// Deletes an existing bundle.
$response = $client->backend()->bundle()->delete('bundle_id');

// Returns a specific bundle.
$response = $client->backend()->bundle()->get('bundle_id');

// Returns a paginated list of bundles.
$response = $client->backend()->bundle()->getAll(1, 1, 'search');

// Publish an existing bundle to the marketplace.
$response = $client->backend()->bundle()->publish('bundle_id');

// Updates an existing bundle.
$response = $client->backend()->bundle()->update('bundle_id', new Backend_BundleUpdate());

// Creates a new category.
$response = $client->backend()->category()->create(new Backend_CategoryCreate());

// Deletes an existing category.
$response = $client->backend()->category()->delete('category_id');

// Returns a specific category.
$response = $client->backend()->category()->get('category_id');

// Returns a paginated list of categories.
$response = $client->backend()->category()->getAll(1, 1, 'search');

// Updates an existing category.
$response = $client->backend()->category()->update('category_id', new Backend_CategoryUpdate());

// Returns a specific config.
$response = $client->backend()->config()->get('config_id');

// Returns a paginated list of configuration values.
$response = $client->backend()->config()->getAll(1, 1, 'search');

// Updates an existing config value.
$response = $client->backend()->config()->update('config_id', new Backend_ConfigUpdate());

// Sends a message to an agent.
$response = $client->backend()->connection()->agent()->send('connection_id', new Agent_Input());

// Creates a new connection.
$response = $client->backend()->connection()->create(new Backend_ConnectionCreate());

// Creates a new row at a table on a database.
$response = $client->backend()->connection()->database()->createRow('connection_id', 'table_name', new Backend_DatabaseRow());

// Creates a new table on a database.
$response = $client->backend()->connection()->database()->createTable('connection_id', new Backend_DatabaseTable());

// Deletes an existing row at a table on a database.
$response = $client->backend()->connection()->database()->deleteRow('connection_id', 'table_name', 'id');

// Deletes an existing table on a database.
$response = $client->backend()->connection()->database()->deleteTable('connection_id', 'table_name');

// Returns a specific row at a table on a database.
$response = $client->backend()->connection()->database()->getRow('connection_id', 'table_name', 'id');

// Returns paginated rows at a table on a database.
$response = $client->backend()->connection()->database()->getRows('connection_id', 'table_name', 1, 1, 'filterBy', 'filterOp', 'filterValue', 'sortBy', 'sortOrder', 'columns');

// Returns the schema of a specific table on a database.
$response = $client->backend()->connection()->database()->getTable('connection_id', 'table_name');

// Returns all available tables on a database.
$response = $client->backend()->connection()->database()->getTables('connection_id', 1, 1);

// Updates an existing row at a table on a database.
$response = $client->backend()->connection()->database()->updateRow('connection_id', 'table_name', 'id', new Backend_DatabaseRow());

// Updates an existing table on a database.
$response = $client->backend()->connection()->database()->updateTable('connection_id', 'table_name', new Backend_DatabaseTable());

// Deletes an existing connection.
$response = $client->backend()->connection()->delete('connection_id');

// Uploads one or more files on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->create('connection_id', new mixed());

// Deletes an existing file on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->delete('connection_id', 'file_id');

// Returns the content of the provided file id on the filesystem connection.
$client->backend()->connection()->filesystem()->get('connection_id', 'file_id');

// Returns all available files on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->getAll('connection_id', 1, 1);

// Updates an existing file on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->update('connection_id', 'file_id', new mixed());

// Returns a specific connection.
$response = $client->backend()->connection()->get('connection_id');

// Returns a paginated list of connections.
$response = $client->backend()->connection()->getAll(1, 1, 'search', 'class');

// Returns all available connection classes.
$response = $client->backend()->connection()->getClasses();

// Returns the connection config form.
$response = $client->backend()->connection()->getForm('class');

// Returns a redirect url to start the OAuth2 authorization flow for the given connection.
$response = $client->backend()->connection()->getRedirect('connection_id');

// Sends an arbitrary HTTP request to the connection.
$response = $client->backend()->connection()->http()->execute('connection_id', new Backend_HttpRequest());

// Returns the SDK specification.
$response = $client->backend()->connection()->sdk()->get('connection_id');

// Updates an existing connection.
$response = $client->backend()->connection()->update('connection_id', new Backend_ConnectionUpdate());

// Creates a new cronjob.
$response = $client->backend()->cronjob()->create(new Backend_CronjobCreate());

// Deletes an existing cronjob.
$response = $client->backend()->cronjob()->delete('cronjob_id');

// Returns a specific cronjob.
$response = $client->backend()->cronjob()->get('cronjob_id');

// Returns a paginated list of cronjobs.
$response = $client->backend()->cronjob()->getAll(1, 1, 'search', 1);

// Updates an existing cronjob.
$response = $client->backend()->cronjob()->update('cronjob_id', new Backend_CronjobUpdate());

// Returns all available dashboard widgets.
$response = $client->backend()->dashboard()->getAll();

// Creates a new event.
$response = $client->backend()->event()->create(new Backend_EventCreate());

// Deletes an existing event.
$response = $client->backend()->event()->delete('event_id');

// Returns a specific event.
$response = $client->backend()->event()->get('event_id');

// Returns a paginated list of events.
$response = $client->backend()->event()->getAll(1, 1, 'search', 1);

// Updates an existing event.
$response = $client->backend()->event()->update('event_id', new Backend_EventUpdate());

// Creates a new firewall rule.
$response = $client->backend()->firewall()->create(new Backend_FirewallCreate());

// Deletes an existing firewall rule.
$response = $client->backend()->firewall()->delete('firewall_id');

// Returns a specific firewall rule.
$response = $client->backend()->firewall()->get('firewall_id');

// Returns a paginated list of firewall rules.
$response = $client->backend()->firewall()->getAll(1, 1, 'search');

// Updates an existing firewall rule.
$response = $client->backend()->firewall()->update('firewall_id', new Backend_FirewallUpdate());

// Creates a new form.
$response = $client->backend()->form()->create(new Backend_FormCreate());

// Deletes an existing form.
$response = $client->backend()->form()->delete('form_id');

// Returns a specific form.
$response = $client->backend()->form()->get('form_id');

// Returns a paginated list of forms.
$response = $client->backend()->form()->getAll(1, 1, 'search');

// Updates an existing form.
$response = $client->backend()->form()->update('form_id', new Backend_FormUpdate());

// Executes a generator with the provided config.
$response = $client->backend()->generator()->executeProvider('provider', new Backend_GeneratorProvider());

// Generates a changelog of all potential changes if you execute this generator with the provided config.
$response = $client->backend()->generator()->getChangelog('provider', new Backend_GeneratorProviderConfig());

// Returns all available generator classes.
$response = $client->backend()->generator()->getClasses();

// Returns the generator config form.
$response = $client->backend()->generator()->getForm('provider');

// Creates a new identity.
$response = $client->backend()->identity()->create(new Backend_IdentityCreate());

// Deletes an existing identity.
$response = $client->backend()->identity()->delete('identity_id');

// Returns a specific identity.
$response = $client->backend()->identity()->get('identity_id');

// Returns a paginated list of identities.
$response = $client->backend()->identity()->getAll(1, 1, 'search');

// Returns all available identity classes.
$response = $client->backend()->identity()->getClasses();

// Returns the identity config form.
$response = $client->backend()->identity()->getForm('class');

// Updates an existing identity.
$response = $client->backend()->identity()->update('identity_id', new Backend_IdentityUpdate());

// Returns a specific log.
$response = $client->backend()->log()->get('log_id');

// Returns a paginated list of logs.
$response = $client->backend()->log()->getAll(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a paginated list of log errors.
$response = $client->backend()->log()->getAllErrors(1, 1, 'search');

// Returns a specific error.
$response = $client->backend()->log()->getError('error_id');

// Returns a specific marketplace action.
$response = $client->backend()->marketplace()->action()->get('user', 'name');

// Returns a paginated list of marketplace actions.
$response = $client->backend()->marketplace()->action()->getAll(1, 'query');

// Installs an action from the marketplace.
$response = $client->backend()->marketplace()->action()->install(new MarketplaceInstall());

// Upgrades an action from the marketplace.
$response = $client->backend()->marketplace()->action()->upgrade('user', 'name');

// Returns a specific marketplace app.
$response = $client->backend()->marketplace()->app()->get('user', 'name');

// Returns a paginated list of marketplace apps.
$response = $client->backend()->marketplace()->app()->getAll(1, 'query');

// Installs an app from the marketplace.
$response = $client->backend()->marketplace()->app()->install(new MarketplaceInstall());

// Upgrades an app from the marketplace.
$response = $client->backend()->marketplace()->app()->upgrade('user', 'name');

// Returns a specific marketplace bundle.
$response = $client->backend()->marketplace()->bundle()->get('user', 'name');

// Returns a paginated list of marketplace bundles.
$response = $client->backend()->marketplace()->bundle()->getAll(1, 'query');

// Installs an bundle from the marketplace.
$response = $client->backend()->marketplace()->bundle()->install(new MarketplaceInstall());

// Upgrades an bundle from the marketplace.
$response = $client->backend()->marketplace()->bundle()->upgrade('user', 'name');

// Creates a new operation.
$response = $client->backend()->operation()->create(new Backend_OperationCreate());

// Deletes an existing operation.
$response = $client->backend()->operation()->delete('operation_id');

// Returns a specific operation.
$response = $client->backend()->operation()->get('operation_id');

// Returns a paginated list of operations.
$response = $client->backend()->operation()->getAll(1, 1, 'search', 1);

// Updates an existing operation.
$response = $client->backend()->operation()->update('operation_id', new Backend_OperationUpdate());

// Creates a new page.
$response = $client->backend()->page()->create(new Backend_PageCreate());

// Deletes an existing page.
$response = $client->backend()->page()->delete('page_id');

// Returns a specific page.
$response = $client->backend()->page()->get('page_id');

// Returns a paginated list of pages.
$response = $client->backend()->page()->getAll(1, 1, 'search');

// Updates an existing page.
$response = $client->backend()->page()->update('page_id', new Backend_PageUpdate());

// Creates a new plan.
$response = $client->backend()->plan()->create(new Backend_PlanCreate());

// Deletes an existing plan.
$response = $client->backend()->plan()->delete('plan_id');

// Returns a specific plan.
$response = $client->backend()->plan()->get('plan_id');

// Returns a paginated list of plans.
$response = $client->backend()->plan()->getAll(1, 1, 'search');

// Updates an existing plan.
$response = $client->backend()->plan()->update('plan_id', new Backend_PlanUpdate());

// Creates a new rate limitation.
$response = $client->backend()->rate()->create(new Backend_RateCreate());

// Deletes an existing rate.
$response = $client->backend()->rate()->delete('rate_id');

// Returns a specific rate.
$response = $client->backend()->rate()->get('rate_id');

// Returns a paginated list of rate limitations.
$response = $client->backend()->rate()->getAll(1, 1, 'search');

// Updates an existing rate.
$response = $client->backend()->rate()->update('rate_id', new Backend_RateUpdate());

// Creates a new role.
$response = $client->backend()->role()->create(new Backend_RoleCreate());

// Deletes an existing role.
$response = $client->backend()->role()->delete('role_id');

// Returns a specific role.
$response = $client->backend()->role()->get('role_id');

// Returns a paginated list of roles.
$response = $client->backend()->role()->getAll(1, 1, 'search');

// Updates an existing role.
$response = $client->backend()->role()->update('role_id', new Backend_RoleUpdate());

// Creates a new schema.
$response = $client->backend()->schema()->create(new Backend_SchemaCreate());

// Deletes an existing schema.
$response = $client->backend()->schema()->delete('schema_id');

// Returns a specific schema.
$response = $client->backend()->schema()->get('schema_id');

// Returns a paginated list of schemas.
$response = $client->backend()->schema()->getAll(1, 1, 'search', 1);

// Returns a paginated list of schema commits.
$response = $client->backend()->schema()->getCommits('schema_id', 1, 1, 'search');

// Returns a HTML preview of the provided schema.
$response = $client->backend()->schema()->getPreview('schema_id');

// Updates an existing schema.
$response = $client->backend()->schema()->update('schema_id', new Backend_SchemaUpdate());

// Creates a new scope.
$response = $client->backend()->scope()->create(new Backend_ScopeCreate());

// Deletes an existing scope.
$response = $client->backend()->scope()->delete('scope_id');

// Returns a specific scope.
$response = $client->backend()->scope()->get('scope_id');

// Returns a paginated list of scopes.
$response = $client->backend()->scope()->getAll(1, 1, 'search');

// Returns all available scopes grouped by category.
$response = $client->backend()->scope()->getCategories();

// Updates an existing scope.
$response = $client->backend()->scope()->update('scope_id', new Backend_ScopeUpdate());

// Generates a specific SDK.
$response = $client->backend()->sdk()->generate(new Backend_SdkGenerate());

// Returns a paginated list of SDKs.
$response = $client->backend()->sdk()->getAll();

// Returns the TypeHub specification.
$response = $client->backend()->specification()->get();

// Returns the changelog between your current specification and the last tag.
$response = $client->backend()->specification()->getChangelog();

// Publish the specification.
$response = $client->backend()->specification()->publish(new Backend_SpecificationPublish());

// Creates a new tag of your specification.
$response = $client->backend()->specification()->tag(new Passthru());

// Returns a statistic containing the activities per user.
$response = $client->backend()->statistic()->getActivitiesPerUser(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the request count.
$response = $client->backend()->statistic()->getCountRequests(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the errors per operation.
$response = $client->backend()->statistic()->getErrorsPerOperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the incoming requests.
$response = $client->backend()->statistic()->getIncomingRequests(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the incoming transactions.
$response = $client->backend()->statistic()->getIncomingTransactions(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the issues tokens.
$response = $client->backend()->statistic()->getIssuedTokens(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used activities.
$response = $client->backend()->statistic()->getMostUsedActivities(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used apps.
$response = $client->backend()->statistic()->getMostUsedApps(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used operations.
$response = $client->backend()->statistic()->getMostUsedOperations(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per ip.
$response = $client->backend()->statistic()->getRequestsPerIP(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per operation.
$response = $client->backend()->statistic()->getRequestsPerOperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per user.
$response = $client->backend()->statistic()->getRequestsPerUser(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the test coverage.
$response = $client->backend()->statistic()->getTestCoverage();

// Returns a statistic containing the time average.
$response = $client->backend()->statistic()->getTimeAverage(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the time per operation.
$response = $client->backend()->statistic()->getTimePerOperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the used points.
$response = $client->backend()->statistic()->getUsedPoints(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the user registrations.
$response = $client->backend()->statistic()->getUserRegistrations(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Creates a new taxonomy.
$response = $client->backend()->taxonomy()->create(new Backend_TaxonomyCreate());

// Deletes an existing taxonomy.
$response = $client->backend()->taxonomy()->delete('taxonomy_id');

// Returns a specific taxonomy.
$response = $client->backend()->taxonomy()->get('taxonomy_id');

// Returns a paginated list of taxonomies.
$response = $client->backend()->taxonomy()->getAll(1, 1, 'search');

// Moves the provided ids to the taxonomy.
$response = $client->backend()->taxonomy()->move('taxonomy_id', new Backend_TaxonomyMove());

// Updates an existing taxonomy.
$response = $client->backend()->taxonomy()->update('taxonomy_id', new Backend_TaxonomyUpdate());

// Removes an existing tenant.
$response = $client->backend()->tenant()->remove('tenant_id');

// Setup a new tenant.
$response = $client->backend()->tenant()->setup('tenant_id');

// Returns a specific test.
$response = $client->backend()->test()->get('test_id');

// Returns a paginated list of tests.
$response = $client->backend()->test()->getAll(1, 1, 'search');

// Refresh all tests.
$response = $client->backend()->test()->refresh();

// Run all tests.
$response = $client->backend()->test()->run();

// Updates an existing test.
$response = $client->backend()->test()->update('test_id', new Backend_Test());

// Returns a specific token.
$response = $client->backend()->token()->get('token_id');

// Returns a paginated list of tokens.
$response = $client->backend()->token()->getAll(1, 1, 'search', 'from', 'to', 1, 1, 1, 'scope', 'ip');

// Returns a specific transaction.
$response = $client->backend()->transaction()->get('transaction_id');

// Returns a paginated list of transactions.
$response = $client->backend()->transaction()->getAll(1, 1, 'search', 'from', 'to', 1, 1, 1, 'status', 'provider', 1);

// Returns all deleted records by trash type.
$response = $client->backend()->trash()->getAllByType('type', 1, 1, 'search');

// Returns all trash types.
$response = $client->backend()->trash()->getTypes();

// Restores a previously deleted record.
$response = $client->backend()->trash()->restore('type', new Backend_TrashRestore());

// Creates a new trigger.
$response = $client->backend()->trigger()->create(new Backend_TriggerCreate());

// Deletes an existing trigger.
$response = $client->backend()->trigger()->delete('trigger_id');

// Returns a specific trigger.
$response = $client->backend()->trigger()->get('trigger_id');

// Returns a paginated list of triggers.
$response = $client->backend()->trigger()->getAll(1, 1, 'search', 1);

// Updates an existing trigger.
$response = $client->backend()->trigger()->update('trigger_id', new Backend_TriggerUpdate());

// Creates a new user.
$response = $client->backend()->user()->create(new Backend_UserCreate());

// Deletes an existing user.
$response = $client->backend()->user()->delete('user_id');

// Returns a specific user.
$response = $client->backend()->user()->get('user_id');

// Returns a paginated list of users.
$response = $client->backend()->user()->getAll(1, 1, 'search');

// Resend the activation mail to the provided user.
$response = $client->backend()->user()->resend('user_id', new Passthru());

// Updates an existing user.
$response = $client->backend()->user()->update('user_id', new Backend_UserUpdate());

// Creates a new webhook.
$response = $client->backend()->webhook()->create(new Backend_WebhookCreate());

// Deletes an existing webhook.
$response = $client->backend()->webhook()->delete('webhook_id');

// Returns a specific webhook.
$response = $client->backend()->webhook()->get('webhook_id');

// Returns a paginated list of webhooks.
$response = $client->backend()->webhook()->getAll(1, 1, 'search');

// Updates an existing webhook.
$response = $client->backend()->webhook()->update('webhook_id', new Backend_WebhookUpdate());

// Activates an previously registered account through a token which was provided to the user via email.
$response = $client->consumer()->account()->activate(new Consumer_UserActivate());

// Authorizes the access of a specific app for the authenticated user.
$response = $client->consumer()->account()->authorize(new Consumer_AuthorizeRequest());

// Change the password for the authenticated user.
$response = $client->consumer()->account()->changePassword(new Backend_AccountChangePassword());

// Change the password after the password reset flow was started.
$response = $client->consumer()->account()->executePasswordReset(new Consumer_UserPasswordReset());

// Returns a user data for the authenticated user.
$response = $client->consumer()->account()->get();

// Returns information about a specific app to start the OAuth2 authorization code flow.
$response = $client->consumer()->account()->getApp('client_id', 'scope');

// User login by providing a username and password.
$response = $client->consumer()->account()->login(new Consumer_UserLogin());

// Refresh a previously obtained access token.
$response = $client->consumer()->account()->refresh(new Consumer_UserRefresh());

// Register a new user account.
$response = $client->consumer()->account()->register(new Consumer_UserRegister());

// Start the password reset flow.
$response = $client->consumer()->account()->requestPasswordReset(new Consumer_UserEmail());

// Updates user data for the authenticated user.
$response = $client->consumer()->account()->update(new Consumer_UserAccount());

// Returns a specific agent.
$response = $client->consumer()->agent()->get('agent_id');

// Returns a paginated list of agents.
$response = $client->consumer()->agent()->getAll(1, 1, 'search');

// Returns a paginated list of agent messages.
$response = $client->consumer()->agent()->message()->getAll('agent_id', 'chat_id');

// Submits a new agent message.
$response = $client->consumer()->agent()->message()->submit('agent_id', new Agent_Input());

// Creates a new app for the authenticated user.
$response = $client->consumer()->app()->create(new Consumer_AppCreate());

// Deletes an existing app for the authenticated user.
$response = $client->consumer()->app()->delete('app_id');

// Returns a specific app for the authenticated user.
$response = $client->consumer()->app()->get('app_id');

// Returns a paginated list of apps which are assigned to the authenticated user.
$response = $client->consumer()->app()->getAll(1, 1, 'search');

// Updates an existing app for the authenticated user.
$response = $client->consumer()->app()->update('app_id', new Consumer_AppUpdate());

// Returns a specific event for the authenticated user.
$response = $client->consumer()->event()->get('event_id');

// Returns a paginated list of apps which are assigned to the authenticated user.
$response = $client->consumer()->event()->getAll(1, 1, 'search');

// Returns a specific form for the authenticated user.
$response = $client->consumer()->form()->get('form_id');

// Returns a paginated list of forms which are relevant to the authenticated user.
$response = $client->consumer()->form()->getAll(1, 1, 'search');

// Deletes an existing grant for an app which was created by the authenticated user.
$response = $client->consumer()->grant()->delete('grant_id');

// Returns a paginated list of grants which are assigned to the authenticated user.
$response = $client->consumer()->grant()->getAll(1, 1, 'search');

// Identity callback endpoint to exchange an access token.
$response = $client->consumer()->identity()->exchange('identity');

// Returns a paginated list of identities which are relevant to the authenticated user.
$response = $client->consumer()->identity()->getAll(1, 'appKey');

// Redirect the user to the configured identity provider.
$response = $client->consumer()->identity()->redirect('identity');

// Returns a specific log for the authenticated user.
$response = $client->consumer()->log()->get('log_id');

// Returns a paginated list of logs which are assigned to the authenticated user.
$response = $client->consumer()->log()->getAll(1, 1, 'search');

// Returns a specific page for the authenticated user.
$response = $client->consumer()->page()->get('page_id');

// Returns a paginated list of pages which are relevant to the authenticated user.
$response = $client->consumer()->page()->getAll(1, 1, 'search');

// Start the checkout process for a specific plan.
$response = $client->consumer()->payment()->checkout('provider', new Consumer_PaymentCheckoutRequest());

// Generates a payment portal link for the authenticated user.
$response = $client->consumer()->payment()->portal('provider', new Consumer_PaymentPortalRequest());

// Returns a specific plan for the authenticated user.
$response = $client->consumer()->plan()->get('plan_id');

// Returns a paginated list of plans which are relevant to the authenticated user.
$response = $client->consumer()->plan()->getAll(1, 1, 'search');

// Returns a paginated list of scopes which are assigned to the authenticated user.
$response = $client->consumer()->scope()->getAll(1, 1, 'search');

// Returns all scopes by category.
$response = $client->consumer()->scope()->getCategories();

// Creates a new token for the authenticated user.
$response = $client->consumer()->token()->create(new Consumer_TokenCreate());

// Deletes an existing token for the authenticated user.
$response = $client->consumer()->token()->delete('token_id');

// Returns a specific token for the authenticated user.
$response = $client->consumer()->token()->get('token_id');

// Returns a paginated list of tokens which are assigned to the authenticated user.
$response = $client->consumer()->token()->getAll(1, 1, 'search');

// Updates an existing token for the authenticated user.
$response = $client->consumer()->token()->update('token_id', new Consumer_TokenUpdate());

// Returns a specific transaction for the authenticated user.
$response = $client->consumer()->transaction()->get('transaction_id');

// Returns a paginated list of transactions which are assigned to the authenticated user.
$response = $client->consumer()->transaction()->getAll(1, 1, 'search');

// Creates a new webhook for the authenticated user.
$response = $client->consumer()->webhook()->create(new Consumer_WebhookCreate());

// Deletes an existing webhook for the authenticated user.
$response = $client->consumer()->webhook()->delete('webhook_id');

// Returns a specific webhook for the authenticated user.
$response = $client->consumer()->webhook()->get('webhook_id');

// Returns a paginated list of webhooks which are assigned to the authenticated user.
$response = $client->consumer()->webhook()->getAll(1, 1, 'search');

// Updates an existing webhook for the authenticated user.
$response = $client->consumer()->webhook()->update('webhook_id', new Consumer_WebhookUpdate());

// Connection OAuth2 callback to authorize a connection.
$response = $client->system()->connection()->callback('name');

// Returns meta information and links about the current installed Fusio version.
$response = $client->system()->meta()->getAbout();

// Debug endpoint which returns the provided data.
$response = $client->system()->meta()->getDebug(new Passthru());

// Health check endpoint which returns information about the health status of the system.
$response = $client->system()->meta()->getHealth();

// Returns all available routes.
$response = $client->system()->meta()->getRoutes();

// Returns details of a specific schema.
$response = $client->system()->meta()->getSchema('name');

// Payment webhook endpoint after successful purchase of a plan.
$response = $client->system()->payment()->webhook('provider');
```
