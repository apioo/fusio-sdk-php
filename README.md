
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
$response = $client->authorization()->getwhoami();

// Revoke the access token of the current authenticated user.
$response = $client->authorization()->revoke();

// Changes the password of the authenticated user.
$response = $client->backend()->account()->changepassword(new BackendAccountchangepassword());

// Returns user data of the authenticated user.
$response = $client->backend()->account()->get();

// Updates user data of the authenticated user.
$response = $client->backend()->account()->update(new BackendUserupdate());

// Creates a new action.
$response = $client->backend()->action()->create(new BackendActioncreate());

// Deletes an existing action.
$response = $client->backend()->action()->delete('action_id');

// Executes a specific action.
$response = $client->backend()->action()->execute('action_id', new BackendActionexecuterequest());

// Returns a specific action.
$response = $client->backend()->action()->get('action_id');

// Returns a paginated list of actions.
$response = $client->backend()->action()->getall(1, 1, 'search');

// Returns all available action classes.
$response = $client->backend()->action()->getclasses();

// Returns a paginated list of action commits.
$response = $client->backend()->action()->getcommits('action_id', 1, 1, 'search');

// Returns the action config form.
$response = $client->backend()->action()->getform('class');

// Updates an existing action.
$response = $client->backend()->action()->update('action_id', new BackendActionupdate());

// Creates a new agent.
$response = $client->backend()->agent()->create(new BackendAgentcreate());

// Deletes an existing agent.
$response = $client->backend()->agent()->delete('agent_id');

// Returns a specific agent.
$response = $client->backend()->agent()->get('agent_id');

// Returns a paginated list of agents.
$response = $client->backend()->agent()->getall(1, 1, 'search');

// Returns available tools for an agent.
$response = $client->backend()->agent()->gettools();

// Returns a paginated list of agent messages.
$response = $client->backend()->agent()->message()->getall('agent_id', 'chat_id');

// Submits a new agent message.
$response = $client->backend()->agent()->message()->submit('agent_id', new AgentInput());

// Updates an existing agent.
$response = $client->backend()->agent()->update('agent_id', new BackendAgentupdate());

// Creates a new app.
$response = $client->backend()->app()->create(new BackendAppcreate());

// Deletes an existing app.
$response = $client->backend()->app()->delete('app_id');

// Deletes an existing token from an app.
$response = $client->backend()->app()->deletetoken('app_id', 'token_id');

// Returns a specific app.
$response = $client->backend()->app()->get('app_id');

// Returns a paginated list of apps.
$response = $client->backend()->app()->getall(1, 1, 'search');

// Updates an existing app.
$response = $client->backend()->app()->update('app_id', new BackendAppupdate());

// Returns a specific audit.
$response = $client->backend()->audit()->get('audit_id');

// Returns a paginated list of audits.
$response = $client->backend()->audit()->getall(1, 1, 'search', 'from', 'to', 1, 1, 'event', 'ip', 'message');

// Generates an backup of the current system.
$response = $client->backend()->backup()->export();

// Imports an backup to the current system.
$response = $client->backend()->backup()->import(new BackendBackupimport());

// Creates a new bundle.
$response = $client->backend()->bundle()->create(new BackendBundlecreate());

// Deletes an existing bundle.
$response = $client->backend()->bundle()->delete('bundle_id');

// Returns a specific bundle.
$response = $client->backend()->bundle()->get('bundle_id');

// Returns a paginated list of bundles.
$response = $client->backend()->bundle()->getall(1, 1, 'search');

// Publish an existing bundle to the marketplace.
$response = $client->backend()->bundle()->publish('bundle_id');

// Updates an existing bundle.
$response = $client->backend()->bundle()->update('bundle_id', new BackendBundleupdate());

// Creates a new category.
$response = $client->backend()->category()->create(new BackendCategorycreate());

// Deletes an existing category.
$response = $client->backend()->category()->delete('category_id');

// Returns a specific category.
$response = $client->backend()->category()->get('category_id');

// Returns a paginated list of categories.
$response = $client->backend()->category()->getall(1, 1, 'search');

// Updates an existing category.
$response = $client->backend()->category()->update('category_id', new BackendCategoryupdate());

// Returns a specific config.
$response = $client->backend()->config()->get('config_id');

// Returns a paginated list of configuration values.
$response = $client->backend()->config()->getall(1, 1, 'search');

// Updates an existing config value.
$response = $client->backend()->config()->update('config_id', new BackendConfigupdate());

// Sends a message to an agent.
$response = $client->backend()->connection()->agent()->send('connection_id', new AgentInput());

// Creates a new connection.
$response = $client->backend()->connection()->create(new BackendConnectioncreate());

// Creates a new row at a table on a database.
$response = $client->backend()->connection()->database()->createrow('connection_id', 'table_name', new BackendDatabaserow());

// Creates a new table on a database.
$response = $client->backend()->connection()->database()->createtable('connection_id', new BackendDatabasetable());

// Deletes an existing row at a table on a database.
$response = $client->backend()->connection()->database()->deleterow('connection_id', 'table_name', 'id');

// Deletes an existing table on a database.
$response = $client->backend()->connection()->database()->deletetable('connection_id', 'table_name');

// Returns a specific row at a table on a database.
$response = $client->backend()->connection()->database()->getrow('connection_id', 'table_name', 'id');

// Returns paginated rows at a table on a database.
$response = $client->backend()->connection()->database()->getrows('connection_id', 'table_name', 1, 1, 'filterBy', 'filterOp', 'filterValue', 'sortBy', 'sortOrder', 'columns');

// Returns the schema of a specific table on a database.
$response = $client->backend()->connection()->database()->gettable('connection_id', 'table_name');

// Returns all available tables on a database.
$response = $client->backend()->connection()->database()->gettables('connection_id', 1, 1);

// Updates an existing row at a table on a database.
$response = $client->backend()->connection()->database()->updaterow('connection_id', 'table_name', 'id', new BackendDatabaserow());

// Updates an existing table on a database.
$response = $client->backend()->connection()->database()->updatetable('connection_id', 'table_name', new BackendDatabasetable());

// Deletes an existing connection.
$response = $client->backend()->connection()->delete('connection_id');

// Uploads one or more files on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->create('connection_id', new mixed());

// Deletes an existing file on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->delete('connection_id', 'file_id');

// Returns the content of the provided file id on the filesystem connection.
$client->backend()->connection()->filesystem()->get('connection_id', 'file_id');

// Returns all available files on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->getall('connection_id', 1, 1);

// Updates an existing file on the filesystem connection.
$response = $client->backend()->connection()->filesystem()->update('connection_id', 'file_id', new mixed());

// Returns a specific connection.
$response = $client->backend()->connection()->get('connection_id');

// Returns a paginated list of connections.
$response = $client->backend()->connection()->getall(1, 1, 'search', 'class');

// Returns all available connection classes.
$response = $client->backend()->connection()->getclasses();

// Returns the connection config form.
$response = $client->backend()->connection()->getform('class');

// Returns a redirect url to start the OAuth2 authorization flow for the given connection.
$response = $client->backend()->connection()->getredirect('connection_id');

// Sends an arbitrary HTTP request to the connection.
$response = $client->backend()->connection()->http()->execute('connection_id', new BackendHttprequest());

// Returns the SDK specification.
$response = $client->backend()->connection()->sdk()->get('connection_id');

// Updates an existing connection.
$response = $client->backend()->connection()->update('connection_id', new BackendConnectionupdate());

// Creates a new cronjob.
$response = $client->backend()->cronjob()->create(new BackendCronjobcreate());

// Deletes an existing cronjob.
$response = $client->backend()->cronjob()->delete('cronjob_id');

// Returns a specific cronjob.
$response = $client->backend()->cronjob()->get('cronjob_id');

// Returns a paginated list of cronjobs.
$response = $client->backend()->cronjob()->getall(1, 1, 'search', 1);

// Updates an existing cronjob.
$response = $client->backend()->cronjob()->update('cronjob_id', new BackendCronjobupdate());

// Returns all available dashboard widgets.
$response = $client->backend()->dashboard()->getall();

// Creates a new event.
$response = $client->backend()->event()->create(new BackendEventcreate());

// Deletes an existing event.
$response = $client->backend()->event()->delete('event_id');

// Returns a specific event.
$response = $client->backend()->event()->get('event_id');

// Returns a paginated list of events.
$response = $client->backend()->event()->getall(1, 1, 'search', 1);

// Updates an existing event.
$response = $client->backend()->event()->update('event_id', new BackendEventupdate());

// Creates a new firewall rule.
$response = $client->backend()->firewall()->create(new BackendFirewallcreate());

// Deletes an existing firewall rule.
$response = $client->backend()->firewall()->delete('firewall_id');

// Returns a specific firewall rule.
$response = $client->backend()->firewall()->get('firewall_id');

// Returns a paginated list of firewall rules.
$response = $client->backend()->firewall()->getall(1, 1, 'search');

// Updates an existing firewall rule.
$response = $client->backend()->firewall()->update('firewall_id', new BackendFirewallupdate());

// Creates a new form.
$response = $client->backend()->form()->create(new BackendFormcreate());

// Deletes an existing form.
$response = $client->backend()->form()->delete('form_id');

// Returns a specific form.
$response = $client->backend()->form()->get('form_id');

// Returns a paginated list of forms.
$response = $client->backend()->form()->getall(1, 1, 'search');

// Updates an existing form.
$response = $client->backend()->form()->update('form_id', new BackendFormupdate());

// Executes a generator with the provided config.
$response = $client->backend()->generator()->executeprovider('provider', new BackendGeneratorprovider());

// Generates a changelog of all potential changes if you execute this generator with the provided config.
$response = $client->backend()->generator()->getchangelog('provider', new BackendGeneratorproviderconfig());

// Returns all available generator classes.
$response = $client->backend()->generator()->getclasses();

// Returns the generator config form.
$response = $client->backend()->generator()->getform('provider');

// Creates a new identity.
$response = $client->backend()->identity()->create(new BackendIdentitycreate());

// Deletes an existing identity.
$response = $client->backend()->identity()->delete('identity_id');

// Returns a specific identity.
$response = $client->backend()->identity()->get('identity_id');

// Returns a paginated list of identities.
$response = $client->backend()->identity()->getall(1, 1, 'search');

// Returns all available identity classes.
$response = $client->backend()->identity()->getclasses();

// Returns the identity config form.
$response = $client->backend()->identity()->getform('class');

// Updates an existing identity.
$response = $client->backend()->identity()->update('identity_id', new BackendIdentityupdate());

// Returns a specific log.
$response = $client->backend()->log()->get('log_id');

// Returns a paginated list of logs.
$response = $client->backend()->log()->getall(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a paginated list of log errors.
$response = $client->backend()->log()->getallerrors(1, 1, 'search');

// Returns a specific error.
$response = $client->backend()->log()->geterror('error_id');

// Returns a specific marketplace action.
$response = $client->backend()->marketplace()->action()->get('user', 'name');

// Returns a paginated list of marketplace actions.
$response = $client->backend()->marketplace()->action()->getall(1, 'query');

// Installs an action from the marketplace.
$response = $client->backend()->marketplace()->action()->install(new Marketplaceinstall());

// Upgrades an action from the marketplace.
$response = $client->backend()->marketplace()->action()->upgrade('user', 'name');

// Returns a specific marketplace app.
$response = $client->backend()->marketplace()->app()->get('user', 'name');

// Returns a paginated list of marketplace apps.
$response = $client->backend()->marketplace()->app()->getall(1, 'query');

// Installs an app from the marketplace.
$response = $client->backend()->marketplace()->app()->install(new Marketplaceinstall());

// Upgrades an app from the marketplace.
$response = $client->backend()->marketplace()->app()->upgrade('user', 'name');

// Returns a specific marketplace bundle.
$response = $client->backend()->marketplace()->bundle()->get('user', 'name');

// Returns a paginated list of marketplace bundles.
$response = $client->backend()->marketplace()->bundle()->getall(1, 'query');

// Installs an bundle from the marketplace.
$response = $client->backend()->marketplace()->bundle()->install(new Marketplaceinstall());

// Upgrades an bundle from the marketplace.
$response = $client->backend()->marketplace()->bundle()->upgrade('user', 'name');

// Creates a new operation.
$response = $client->backend()->operation()->create(new BackendOperationcreate());

// Deletes an existing operation.
$response = $client->backend()->operation()->delete('operation_id');

// Returns a specific operation.
$response = $client->backend()->operation()->get('operation_id');

// Returns a paginated list of operations.
$response = $client->backend()->operation()->getall(1, 1, 'search', 1);

// Updates an existing operation.
$response = $client->backend()->operation()->update('operation_id', new BackendOperationupdate());

// Creates a new page.
$response = $client->backend()->page()->create(new BackendPagecreate());

// Deletes an existing page.
$response = $client->backend()->page()->delete('page_id');

// Returns a specific page.
$response = $client->backend()->page()->get('page_id');

// Returns a paginated list of pages.
$response = $client->backend()->page()->getall(1, 1, 'search');

// Updates an existing page.
$response = $client->backend()->page()->update('page_id', new BackendPageupdate());

// Creates a new plan.
$response = $client->backend()->plan()->create(new BackendPlancreate());

// Deletes an existing plan.
$response = $client->backend()->plan()->delete('plan_id');

// Returns a specific plan.
$response = $client->backend()->plan()->get('plan_id');

// Returns a paginated list of plans.
$response = $client->backend()->plan()->getall(1, 1, 'search');

// Updates an existing plan.
$response = $client->backend()->plan()->update('plan_id', new BackendPlanupdate());

// Creates a new rate limitation.
$response = $client->backend()->rate()->create(new BackendRatecreate());

// Deletes an existing rate.
$response = $client->backend()->rate()->delete('rate_id');

// Returns a specific rate.
$response = $client->backend()->rate()->get('rate_id');

// Returns a paginated list of rate limitations.
$response = $client->backend()->rate()->getall(1, 1, 'search');

// Updates an existing rate.
$response = $client->backend()->rate()->update('rate_id', new BackendRateupdate());

// Creates a new role.
$response = $client->backend()->role()->create(new BackendRolecreate());

// Deletes an existing role.
$response = $client->backend()->role()->delete('role_id');

// Returns a specific role.
$response = $client->backend()->role()->get('role_id');

// Returns a paginated list of roles.
$response = $client->backend()->role()->getall(1, 1, 'search');

// Updates an existing role.
$response = $client->backend()->role()->update('role_id', new BackendRoleupdate());

// Creates a new schema.
$response = $client->backend()->schema()->create(new BackendSchemacreate());

// Deletes an existing schema.
$response = $client->backend()->schema()->delete('schema_id');

// Returns a specific schema.
$response = $client->backend()->schema()->get('schema_id');

// Returns a paginated list of schemas.
$response = $client->backend()->schema()->getall(1, 1, 'search', 1);

// Returns a paginated list of schema commits.
$response = $client->backend()->schema()->getcommits('schema_id', 1, 1, 'search');

// Returns a HTML preview of the provided schema.
$response = $client->backend()->schema()->getpreview('schema_id');

// Updates an existing schema.
$response = $client->backend()->schema()->update('schema_id', new BackendSchemaupdate());

// Creates a new scope.
$response = $client->backend()->scope()->create(new BackendScopecreate());

// Deletes an existing scope.
$response = $client->backend()->scope()->delete('scope_id');

// Returns a specific scope.
$response = $client->backend()->scope()->get('scope_id');

// Returns a paginated list of scopes.
$response = $client->backend()->scope()->getall(1, 1, 'search');

// Returns all available scopes grouped by category.
$response = $client->backend()->scope()->getcategories();

// Updates an existing scope.
$response = $client->backend()->scope()->update('scope_id', new BackendScopeupdate());

// Generates a specific SDK.
$response = $client->backend()->sdk()->generate(new BackendSdkgenerate());

// Returns a paginated list of SDKs.
$response = $client->backend()->sdk()->getall();

// Returns the TypeHub specification.
$response = $client->backend()->specification()->get();

// Returns the changelog between your current specification and the last tag.
$response = $client->backend()->specification()->getchangelog();

// Publish the specification.
$response = $client->backend()->specification()->publish(new BackendSpecificationpublish());

// Creates a new tag of your specification.
$response = $client->backend()->specification()->tag(new Passthru());

// Returns a statistic containing the activities per user.
$response = $client->backend()->statistic()->getactivitiesperuser(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the request count.
$response = $client->backend()->statistic()->getcountrequests(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the errors per operation.
$response = $client->backend()->statistic()->geterrorsperoperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the incoming requests.
$response = $client->backend()->statistic()->getincomingrequests(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the incoming transactions.
$response = $client->backend()->statistic()->getincomingtransactions(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the issues tokens.
$response = $client->backend()->statistic()->getissuedtokens(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used activities.
$response = $client->backend()->statistic()->getmostusedactivities(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used apps.
$response = $client->backend()->statistic()->getmostusedapps(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the most used operations.
$response = $client->backend()->statistic()->getmostusedoperations(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per ip.
$response = $client->backend()->statistic()->getrequestsperip(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per operation.
$response = $client->backend()->statistic()->getrequestsperoperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the requests per user.
$response = $client->backend()->statistic()->getrequestsperuser(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the test coverage.
$response = $client->backend()->statistic()->gettestcoverage();

// Returns a statistic containing the time average.
$response = $client->backend()->statistic()->gettimeaverage(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the time per operation.
$response = $client->backend()->statistic()->gettimeperoperation(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the used points.
$response = $client->backend()->statistic()->getusedpoints(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Returns a statistic containing the user registrations.
$response = $client->backend()->statistic()->getuserregistrations(1, 1, 'search', 'from', 'to', 1, 1, 1, 'ip', 'userAgent', 'method', 'path', 'header', 'body');

// Creates a new taxonomy.
$response = $client->backend()->taxonomy()->create(new BackendTaxonomycreate());

// Deletes an existing taxonomy.
$response = $client->backend()->taxonomy()->delete('taxonomy_id');

// Returns a specific taxonomy.
$response = $client->backend()->taxonomy()->get('taxonomy_id');

// Returns a paginated list of taxonomies.
$response = $client->backend()->taxonomy()->getall(1, 1, 'search');

// Moves the provided ids to the taxonomy.
$response = $client->backend()->taxonomy()->move('taxonomy_id', new BackendTaxonomymove());

// Updates an existing taxonomy.
$response = $client->backend()->taxonomy()->update('taxonomy_id', new BackendTaxonomyupdate());

// Removes an existing tenant.
$response = $client->backend()->tenant()->remove('tenant_id');

// Setup a new tenant.
$response = $client->backend()->tenant()->setup('tenant_id');

// Returns a specific test.
$response = $client->backend()->test()->get('test_id');

// Returns a paginated list of tests.
$response = $client->backend()->test()->getall(1, 1, 'search');

// Refresh all tests.
$response = $client->backend()->test()->refresh();

// Run all tests.
$response = $client->backend()->test()->run();

// Updates an existing test.
$response = $client->backend()->test()->update('test_id', new BackendTest());

// Returns a specific token.
$response = $client->backend()->token()->get('token_id');

// Returns a paginated list of tokens.
$response = $client->backend()->token()->getall(1, 1, 'search', 'from', 'to', 1, 1, 1, 'scope', 'ip');

// Returns a specific transaction.
$response = $client->backend()->transaction()->get('transaction_id');

// Returns a paginated list of transactions.
$response = $client->backend()->transaction()->getall(1, 1, 'search', 'from', 'to', 1, 1, 1, 'status', 'provider', 1);

// Returns all deleted records by trash type.
$response = $client->backend()->trash()->getallbytype('type', 1, 1, 'search');

// Returns all trash types.
$response = $client->backend()->trash()->gettypes();

// Restores a previously deleted record.
$response = $client->backend()->trash()->restore('type', new BackendTrashrestore());

// Creates a new trigger.
$response = $client->backend()->trigger()->create(new BackendTriggercreate());

// Deletes an existing trigger.
$response = $client->backend()->trigger()->delete('trigger_id');

// Returns a specific trigger.
$response = $client->backend()->trigger()->get('trigger_id');

// Returns a paginated list of triggers.
$response = $client->backend()->trigger()->getall(1, 1, 'search', 1);

// Updates an existing trigger.
$response = $client->backend()->trigger()->update('trigger_id', new BackendTriggerupdate());

// Creates a new user.
$response = $client->backend()->user()->create(new BackendUsercreate());

// Deletes an existing user.
$response = $client->backend()->user()->delete('user_id');

// Returns a specific user.
$response = $client->backend()->user()->get('user_id');

// Returns a paginated list of users.
$response = $client->backend()->user()->getall(1, 1, 'search');

// Resend the activation mail to the provided user.
$response = $client->backend()->user()->resend('user_id', new Passthru());

// Updates an existing user.
$response = $client->backend()->user()->update('user_id', new BackendUserupdate());

// Creates a new webhook.
$response = $client->backend()->webhook()->create(new BackendWebhookcreate());

// Deletes an existing webhook.
$response = $client->backend()->webhook()->delete('webhook_id');

// Returns a specific webhook.
$response = $client->backend()->webhook()->get('webhook_id');

// Returns a paginated list of webhooks.
$response = $client->backend()->webhook()->getall(1, 1, 'search');

// Updates an existing webhook.
$response = $client->backend()->webhook()->update('webhook_id', new BackendWebhookupdate());

// Activates an previously registered account through a token which was provided to the user via email.
$response = $client->consumer()->account()->activate(new ConsumerUseractivate());

// Authorizes the access of a specific app for the authenticated user.
$response = $client->consumer()->account()->authorize(new ConsumerAuthorizerequest());

// Change the password for the authenticated user.
$response = $client->consumer()->account()->changepassword(new BackendAccountchangepassword());

// Change the password after the password reset flow was started.
$response = $client->consumer()->account()->executepasswordreset(new ConsumerUserpasswordreset());

// Returns a user data for the authenticated user.
$response = $client->consumer()->account()->get();

// Returns information about a specific app to start the OAuth2 authorization code flow.
$response = $client->consumer()->account()->getapp('client_id', 'scope');

// User login by providing a username and password.
$response = $client->consumer()->account()->login(new ConsumerUserlogin());

// Refresh a previously obtained access token.
$response = $client->consumer()->account()->refresh(new ConsumerUserrefresh());

// Register a new user account.
$response = $client->consumer()->account()->register(new ConsumerUserregister());

// Start the password reset flow.
$response = $client->consumer()->account()->requestpasswordreset(new ConsumerUseremail());

// Updates user data for the authenticated user.
$response = $client->consumer()->account()->update(new ConsumerUseraccount());

// Returns a specific agent.
$response = $client->consumer()->agent()->get('agent_id');

// Returns a paginated list of agents.
$response = $client->consumer()->agent()->getall(1, 1, 'search');

// Returns a paginated list of agent messages.
$response = $client->consumer()->agent()->message()->getall('agent_id', 'chat_id');

// Submits a new agent message.
$response = $client->consumer()->agent()->message()->submit('agent_id', new AgentInput());

// Creates a new app for the authenticated user.
$response = $client->consumer()->app()->create(new ConsumerAppcreate());

// Deletes an existing app for the authenticated user.
$response = $client->consumer()->app()->delete('app_id');

// Returns a specific app for the authenticated user.
$response = $client->consumer()->app()->get('app_id');

// Returns a paginated list of apps which are assigned to the authenticated user.
$response = $client->consumer()->app()->getall(1, 1, 'search');

// Updates an existing app for the authenticated user.
$response = $client->consumer()->app()->update('app_id', new ConsumerAppupdate());

// Returns a specific event for the authenticated user.
$response = $client->consumer()->event()->get('event_id');

// Returns a paginated list of apps which are assigned to the authenticated user.
$response = $client->consumer()->event()->getall(1, 1, 'search');

// Returns a specific form for the authenticated user.
$response = $client->consumer()->form()->get('form_id');

// Returns a paginated list of forms which are relevant to the authenticated user.
$response = $client->consumer()->form()->getall(1, 1, 'search');

// Deletes an existing grant for an app which was created by the authenticated user.
$response = $client->consumer()->grant()->delete('grant_id');

// Returns a paginated list of grants which are assigned to the authenticated user.
$response = $client->consumer()->grant()->getall(1, 1, 'search');

// Identity callback endpoint to exchange an access token.
$response = $client->consumer()->identity()->exchange('identity');

// Returns a paginated list of identities which are relevant to the authenticated user.
$response = $client->consumer()->identity()->getall(1, 'appKey');

// Redirect the user to the configured identity provider.
$response = $client->consumer()->identity()->redirect('identity');

// Returns a specific log for the authenticated user.
$response = $client->consumer()->log()->get('log_id');

// Returns a paginated list of logs which are assigned to the authenticated user.
$response = $client->consumer()->log()->getall(1, 1, 'search');

// Returns a specific page for the authenticated user.
$response = $client->consumer()->page()->get('page_id');

// Returns a paginated list of pages which are relevant to the authenticated user.
$response = $client->consumer()->page()->getall(1, 1, 'search');

// Start the checkout process for a specific plan.
$response = $client->consumer()->payment()->checkout('provider', new ConsumerPaymentcheckoutrequest());

// Generates a payment portal link for the authenticated user.
$response = $client->consumer()->payment()->portal('provider', new ConsumerPaymentportalrequest());

// Returns a specific plan for the authenticated user.
$response = $client->consumer()->plan()->get('plan_id');

// Returns a paginated list of plans which are relevant to the authenticated user.
$response = $client->consumer()->plan()->getall(1, 1, 'search');

// Returns a paginated list of scopes which are assigned to the authenticated user.
$response = $client->consumer()->scope()->getall(1, 1, 'search');

// Returns all scopes by category.
$response = $client->consumer()->scope()->getcategories();

// Creates a new token for the authenticated user.
$response = $client->consumer()->token()->create(new ConsumerTokencreate());

// Deletes an existing token for the authenticated user.
$response = $client->consumer()->token()->delete('token_id');

// Returns a specific token for the authenticated user.
$response = $client->consumer()->token()->get('token_id');

// Returns a paginated list of tokens which are assigned to the authenticated user.
$response = $client->consumer()->token()->getall(1, 1, 'search');

// Updates an existing token for the authenticated user.
$response = $client->consumer()->token()->update('token_id', new ConsumerTokenupdate());

// Returns a specific transaction for the authenticated user.
$response = $client->consumer()->transaction()->get('transaction_id');

// Returns a paginated list of transactions which are assigned to the authenticated user.
$response = $client->consumer()->transaction()->getall(1, 1, 'search');

// Creates a new webhook for the authenticated user.
$response = $client->consumer()->webhook()->create(new ConsumerWebhookcreate());

// Deletes an existing webhook for the authenticated user.
$response = $client->consumer()->webhook()->delete('webhook_id');

// Returns a specific webhook for the authenticated user.
$response = $client->consumer()->webhook()->get('webhook_id');

// Returns a paginated list of webhooks which are assigned to the authenticated user.
$response = $client->consumer()->webhook()->getall(1, 1, 'search');

// Updates an existing webhook for the authenticated user.
$response = $client->consumer()->webhook()->update('webhook_id', new ConsumerWebhookupdate());

// Connection OAuth2 callback to authorize a connection.
$response = $client->system()->connection()->callback('name');

// Returns meta information and links about the current installed Fusio version.
$response = $client->system()->meta()->getabout();

// Debug endpoint which returns the provided data.
$response = $client->system()->meta()->getdebug(new Passthru());

// Health check endpoint which returns information about the health status of the system.
$response = $client->system()->meta()->gethealth();

// Returns all available routes.
$response = $client->system()->meta()->getroutes();

// Returns details of a specific schema.
$response = $client->system()->meta()->getschema('name');

// Payment webhook endpoint after successful purchase of a plan.
$response = $client->system()->payment()->webhook('provider');
```
