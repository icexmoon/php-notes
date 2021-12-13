#include <iostream>
using namespace std;
void print_var_address(int &var, string var_anme);
int main()
{
    int a = 1;
    int &b = a;
    int &c = b;
    int &d = c;
    print_var_address(a, "a");
    print_var_address(b, "b");
    print_var_address(c, "c");
    print_var_address(d, "d");
    // a address is :0x61fdac
    // b address is :0x61fdac
    // c address is :0x61fdac
    // d address is :0x61fdac
}
void print_var_address(int &var, string var_name)
{
    cout << var_name << " address is :" << &var << endl;
}