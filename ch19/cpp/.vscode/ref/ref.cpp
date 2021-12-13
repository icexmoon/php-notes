#include <iostream>
using namespace std;
int main()
{
    int a = 1;
    int &b = a;
    cout << "a var address is:" << &a << endl;
    cout << "b var address is:" << &b << endl;
}
// a var address is:0x61fe14
// b var address is:0x61fe14
