<?php


interface IA {

}

interface IB {

}

interface IC {

}

interface ID extends IA, IB, IC {

}

abstract class A {

}

class B extends A implements IA, IB {

}

class C extends B implements ID {

}

class D extends C {

}

final class E extends D {

}

class F extends E {
    // Not Possible
}