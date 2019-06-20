function besttwo(IA1,IA2,IA3){
 internals = [IA1,IA2,IA3];

 var first = Math.max.apply(Math, internals);

 var i = internals.indexOf(first);
 internals.splice(i, 1);

 var second = Math.max.apply(Math, internals);

 average = (first + second)/2;
 average = Math.round((average*0.75)+5);

 return(average);

}
