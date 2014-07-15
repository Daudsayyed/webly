// problem: why does it log out out 1000?
// fix it to log 100, 200, 300, 400, 500 etc


/* solution:- 1. Remove console.log(i) statement from waitfor loop  & place it in for loop
// 		   2. Add = sign in (i<1000) so it can print till 1000
		   3. Add if statement if u dont want 0 to print at first loop */ 

// loops 10 times from 0 - 1000 in increments of 100
for (var i = 0; i <=1000; i += 100) {
  waitFor(i, function then() {
  })
if(i!=0)
     console.log(i)
}

// this will run a callback function after waiting milliseconds
function waitFor(milliseconds, callback) {
  setTimeout(callback, milliseconds)
}