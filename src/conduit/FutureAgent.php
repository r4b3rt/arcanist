<?php

abstract class FutureAgent
  extends Future {

  private $futures = array();

  final protected function setFutures(array $futures) {
    $this->futures = $futures;
  }

  final protected function getFutures() {
    return $this->futures;
  }

  final public function getReadSockets() {
    $sockets = array();
    foreach ($this->getFutures() as $future) {
      foreach ($future->getReadSockets() as $read_socket) {
        $sockets[] = $read_socket;
      }
    }

    return $sockets;
  }

  final public function getWriteSockets() {
    $sockets = array();
    foreach ($this->getFutures() as $future) {
      foreach ($future->getWriteSockets() as $read_socket) {
        $sockets[] = $read_socket;
      }
    }

    return $sockets;
  }

}
