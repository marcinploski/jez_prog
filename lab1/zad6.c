// Sprawdzić i wyjaśnić działanie następujących fragmentów programów:
// a. a = b = c = d = 0;
// b. for (i=0; i<N; a[i++]=i);
// c. for (i=0; i<N; a[++i]=i);
// d. i=1; while ((i*=2)<N);

#include <stdio.h>
int main(){
int a,b,c,d,i,N;

  //a
  a = b = c = d = 0;
  // znak przypisania łączy od lewej do prawej

  //b
  for (i=0; i<N; a[i++]=i);
  // wynik: 0,1,2,3,4...N

  //c
  for (i=0; i<N; a[++i]=i);
  // wynik: 1,2,3,4...N

  //d
  i=1; while ((i*=2)<N);
  // wynik: 2, 4, 6, 8

  return 0;
}
