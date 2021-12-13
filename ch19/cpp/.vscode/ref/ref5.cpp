#include <iostream>
using namespace std;
int main()
{
    int a = 1;
    int *b = &a;
    int *c = &(*b);
    cout << &a << endl;
    cout << b << endl;
    cout << c << endl;
    // 0x61fe0c
    // 0x61fe0c
    // 0x61fe0c
}