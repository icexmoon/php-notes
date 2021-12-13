#include <iostream>
using namespace std;
int main()
{
    int a = 1;
    int &b = a;
    int c = 9;
    b = c;
    cout << "a var address is:" << &a << endl;
    cout << "b var address is:" << &b << endl;
    cout << "c var address is:" << &c << endl;
    cout << "a value:" << a << endl;
    cout << "b value:" << b << endl;
}
// a var address is:0x61fe04
// b var address is:0x61fe04
// c var address is:0x61fe00
// a value:9
// b value:9
