// export { }
// let message = "Welcome back";
// console.log(message);
// let x;
// const y = 10; //never change
// let isBegin: boolean = true;
// let name: string = "sakib al HAsan";
// let sentence = `My name is ${name}
// I am beginer`;
// console.log(sentence);

// let n: null = null;
// let u: undefined = undefined;       //any variable can contain

// let list1: number[] = [1, 2, 3];
// let list2: Array<number> = [1, 2, 3, 4];
// let per: [string, number] = ["sakib", 1209];

// let ran: any = 10;
// ran = true;
// console.log(ran);

// let my: unknown = 10;
// (my as string).toUpperCase();       //type casting


function add(num1, num2) {
    return num1 + num2;
}


function add2(num1, num2?) {
    if (num2)
        return num1 + num2;
    else
        return num1;
}

let result = add2(23);
console.log(result);

interface Person {
    firstName: string,
    lastName: string
}

// function fullName(person: { firstName: string, lastName: string }) {
function fullName(person: Person) {
    console.log(`${person.firstName} ${person.lastName}`);

}

let p = {
    firstName: `sakib`,
    lastName: `Hasan`
};

fullName(p);

class Employee {
    employeeName: string;

    constructor(name: string) {
        this.employeeName = name;
    }


    greet() {
        console.log(`Employee name is  ${this.employeeName}`);
    }
}

let emp = new Employee(`Sakib Al Hasan`);
emp.greet();