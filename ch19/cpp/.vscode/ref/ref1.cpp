#include <iostream>
using namespace std;
int main()
{
    int a = 1;
    int *b = &a;
    cout << "a var address is:" << &a << endl;
    cout << "pointer's value::" << b << endl;
    cout << "pointer's point value:" << *b << endl;
    cout << "pointer's address:" << &b << endl;
}
// a var address is:0x61fe0c
// pointer's value::0x61fe0c
// pointer's point value:1
// pointer's address:0x61fe00
