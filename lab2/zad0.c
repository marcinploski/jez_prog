#include <stdio.h>

int main() {
  printf("a: %d\n", 5&3);
  printf("b: %d\n", 5|3);
  printf("c: %d\n", 7<<2&7);
  printf("d: %d\n", 7<<(2&7));
  printf("e: %d\n", ((-1)<<8)>>16);
  printf("f: %d\n", 13^9);

  printf("g: %d\n", (-8)>>2);

  return 0;
}
