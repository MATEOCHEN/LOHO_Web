class test {
    constructor() {
    }
    fun1() {
        console.log(this);
    }
}

let obj2 = new test();
var obj = new test();
obj.fun1();