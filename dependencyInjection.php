<?php

/*

  A "practical" example of Dependency Injection.
  Decouple objects and create modular code making
  use of one of the most powerful tecniques of OOP.

*/

// Lock class
class Lock {

  protected $isLocked;

  public function lock() {

    $this->isLocked = true;

  }

  public function unlock() {

    $this->isLocked = false;

  }

  public function isLocked() {

    return $this->isLocked;

  }

}

// Chest class
class Chest {

  protected $lock;
  protected $isClosed;

  public function __construct(Lock $lock) {

    $this->lock = $lock;
    $this->isClosed = $isClosed;

  }

  public function close($lock = true) {

    if($lock === true)
      $this->lock->lock();

    $this->isClosed = true;

    echo "closed\n";

  }

  public function open($lock) {

    if($this->lock->isLocked())
      $this->lock->unlock();

    $this->isClosed = false;

    echo "opened\n";

  }

  public function isClosed() {

    return $this->isClosed;

  }

}

// Test
$chest = new Chest(new Lock);
$chest->close();
