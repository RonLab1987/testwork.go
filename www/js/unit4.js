
$('document').ready(docReady);


function docReady(){
var lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id sapien ex. Praesent porta, leo vel lobortis accumsan, ante justo maximus nunc, quis cursus felis metus quis neque. Aenean mollis libero non risus faucibus lacinia. Vestibulum venenatis massa quis sapien viverra malesuada a quis ante. Aliquam et condimentum turpis. Quisque non ante pretium, sagittis est sagittis, euismod eros. Aliquam id massa dolor. Cras interdum sit amet tellus ultrices tincidunt. Proin ultrices malesuada sem, finibus volutpat sem accumsan ac. Phasellus enim odio, aliquet eu semper ac, imperdiet vitae erat. Morbi dictum, nibh in bibendum efficitur, tortor lacus lobortis turpis, eget placerat ligula mauris vitae ipsum. Proin suscipit pretium mauris, nec rhoncus arcu sodales sollicitudin. Vivamus iaculis fermentum pulvinar. Sed sollicitudin feugiat suscipit. Donec a erat et elit fermentum feugiat. ";
var array = {a:1, d:{f:'7', c:{b:8, a:2, g:['b','a','f']}}};
console.log('<title> :');
console.log($('title').html());
$('#titleVal').html($('title').html());

console.log('');
console.log('исходный текст');
console.log(lorem);
$("#textIn").html(lorem);

var dotLorem = lorem.replace(new RegExp("\\.",'g'),'[dot]');
console.log('');
console.log('после обработки');
console.log(dotLorem);
$("#textOut").html(dotLorem);

console.log('');
console.log("значение элем. b объекта array = {a:1, d:{f:'7', c:{b:8, a:2, g:['b','a','f']}}}");
console.log("array['d']['c']['b']: ");
console.log(array['d']['c']['b']);
$("#objVal").html(array['d']['c']['b']);

}


