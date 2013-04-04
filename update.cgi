#!/usr/bin/python

fo = open('stat.txt', 'r')
number = int(fo.readline(),base=10);
number = number + 1
fo.close()
fo = open('stat.txt', 'w')
fo.write('%d'%(number))
fo.close

