#include <stdio.h>

void dzielenie(int *n, int *k, int *r, int *q){
  *q=((*n)/(*k));
  *r=((*n)%(*k));
}

int main() {
  int a, b, c, d;
  printf("Podaj dwie liczby n i k\n");
  scanf("%d %d", &a, &b);

  dzielenie(&a, &b, &c, &d);

  printf("Iloraz całkowity n przez k: %d\n", d);
  printf("Reszta całkowity n przez k: %d\n", c);

  return 0;
}
