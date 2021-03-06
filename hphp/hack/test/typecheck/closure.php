<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class A {
  public int $called = 0;

  public function foo($x) {
    $y = function($x) use ($this) {
      $this->called++;
      return $x + 10;
    };
    return $y($x);
  }
}
