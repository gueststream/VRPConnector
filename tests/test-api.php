<?php

class ApiTest extends WP_UnitTestCase {

	function testConnectionWithoutKey() {
		global $vrp;
		$check = $vrp->testAPI();
		$this->assertTrue( isset( $check->Error ) );
	}

	function testConnectionWithKey() {
		global $vrp;
		$vrp->__load_demo_key();
		$check = $vrp->testAPI();
		$this->assertTrue( ((isset( $check->Status )) && ( 'Online' == $check->Status ) ) );
	}

}
