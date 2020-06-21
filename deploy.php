<?php

namespace Deployer;

require 'recipe/common.php';

set( 'application', 'C7 Inviter' );
set( 'repository', 'git@github.com:conference7/c7-inviter.git' );

// [Optional] Allocate tty for git clone. Default value is false.
set( 'git_tty', true );

set( 'composer_options', 'install --optimize-autoloader --no-dev' );

// Hosts
host( 'prod' )
	->stage( 'prod' )
	->set('branch', 'master')
	->hostname( 'tmprly' )
	->set( 'deploy_path', '~/projects/conference7/inviter/deploy' );

task( 'deploy:vendors_after', function () {
	writeln( ' - run composer again. Yes indeed.... ⤜(ⱺ ʖ̯ⱺ)⤏  ' );
	run( 'cd {{release_path}} && composer install --optimize-autoloader' );

	writeln( ' - Symlink .env' );
	run( 'ln -nfs {{deploy_path}}/shared/.env {{release_path}}/.env' );

} );

// Tasks
task( 'deploy', [
	'deploy:info',
	'deploy:prepare',
	'deploy:lock',
	'deploy:release',
	'deploy:update_code',
	'deploy:shared',
	'deploy:writable',
	'deploy:vendors',
	'deploy:vendors_after',
	'deploy:clear_paths',
	'deploy:symlink',
	'deploy:unlock',
	'cleanup',
	'success',
] );

// [Optional] If deploy fails automatically unlock.
after( 'deploy:failed', 'deploy:unlock' );