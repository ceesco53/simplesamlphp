<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example simpleSAMLphp SAML 2.0 SP
 */
// metadata should match entityid
$metadata['http://jonelson-sso.login.run-06.haas-59.pez.pivotal.io'] = array(
	'AssertionConsumerService' => 'https://jonelson-sso.login.run-06.haas-59.pez.pivotal.io/saml/SSO/alias/jonelson-sso.login.run-06.haas-59.pez.pivotal.io',
	'SingleLogoutService' => 'https://jonelson-sso.login.run-06.haas-59.pez.pivotal.io/saml/SingleLogout/alias/jonelson-sso.login.run-06.haas-59.pez.pivotal.io',
);
