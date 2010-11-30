--TEST--
check reflection of jIKVPersistent interface
--SKIPIF--
<?php if (!extension_loaded("jelix")) print "skip"; ?>
--FILE--
<?php 
Reflection::export(new ReflectionClass('jIKVPersistent'));
?>
--EXPECT--
Interface [ <internal:jelix> interface jIKVPersistent ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [0] {
  }

  - Methods [1] {
    Method [ <internal:jelix> abstract public method sync ] {
    }
  }
}

