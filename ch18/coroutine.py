from typing import Coroutine


def create_number():
    for num in range(11):
        yield num


def double_num(cn: Coroutine):
    while True:
        try:
            num = next(cn)
        except StopIteration:
            break
        num = num*2
        yield num


def print_num(dn: Coroutine):
    while True:
        try:
            num = next(dn)
        except StopIteration:
            break
        print("{:d} ".format(num), sep=' ', end='')


print_num(double_num(create_number()))
