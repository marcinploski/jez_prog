#include <stdio.h>
#include <limits.h>
#include <float.h>
#include <math.h>

int main() {
  short a = 300*500;
  int b = 50000*50000;
  long c = 2000000000*2000000000;
  float d = 0.3;
  double e = 0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1;

  printf("short: \n");
  printf("300 * 500 = %i\n", a);
  printf("\n");

  printf("int: \n");
  printf("50 000 * 50 000 = %i\n", b);
  printf("\n");

  printf("long: \n");
  printf("2000000000*2000000000 = %li\n", c);
  printf("\n");

  printf("double: \n");
  printf("0.1..+0.1 rozne od 1 = %lf\n", e);
  printf("\n");

  return 0;
}
