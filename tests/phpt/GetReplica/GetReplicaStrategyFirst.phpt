--TEST--
GetReplica - GetReplicaStrategyFirst

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("GetReplica", "testGetReplicaStrategyFirst");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("GetReplica", "testGetReplicaStrategyFirst");
--EXPECT--
PHP_COUCHBASE_OK