package main

import (
	"fmt"
	"sync"
)

func create_num(out_chan chan<- int, swg *sync.WaitGroup) {
	defer swg.Done()
	for i := 0; i <= 10; i++ {
		out_chan <- i
	}
	close(out_chan)
}

func double_num(in_chan <-chan int, out_chan chan<- int, swg *sync.WaitGroup) {
	defer swg.Done()
	for {
		num, ok := <-in_chan
		if !ok {
			close(out_chan)
			break
		}
		num = num * 2
		out_chan <- num
	}
}

func print_num(in_chan <-chan int, swg *sync.WaitGroup) {
	defer swg.Done()
	for {
		num, ok := <-in_chan
		if !ok {
			break
		}
		fmt.Printf("%d ", num)
	}
}

func main() {
	chan1 := make(chan int)
	chan2 := make(chan int)
	var swg sync.WaitGroup
	swg.Add(1)
	go create_num(chan1, &swg)
	swg.Add(1)
	go double_num(chan1, chan2, &swg)
	swg.Add(1)
	go print_num(chan2, &swg)
	swg.Wait()
}
