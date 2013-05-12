<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>pForth - portable Forth in 'C</title>
<LINK REL="SHORTCUT ICON" HREF="http://www.softsynth.com/favicon.ico" />
<link href="/aardvark/custom/custom.css?version=27" rel="stylesheet" type="text/css">
<link href="/aardvark/aardvark.css?version=27" rel="stylesheet" type="text/css">
<!-- extra head -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-750748-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>
<div id="container">
<div id="header">
  <div id="leftheader"><a href="http://www.softsynth.com/"> <img src="/images/softsynth_logo.png" width="200" height="100" border="0"></a></div>
  <div id="rightheader">
    <!-- Google CSE Search Box Begins -->
    <form id="searchbox_015572705897646109065:fp6grb7yfpk" action="http://www.google.com/cse">
      <input type="hidden" name="cx" value="015572705897646109065:fp6grb7yfpk" />
      <input name="q" type="text" size="40" />
      <input type="submit" name="sa" value="Search" />
      <input type="hidden" name="cof" value="FORID:0" />
    </form>
    <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_015572705897646109065%3Afp6grb7yfpk"></script>
    <!-- Google CSE Search Box Ends -->
  </div>
  <div id="midheader">
    <h1>SoftSynth</h1>
    <h2>... music and computers ...</h2>
  </div>
  <br class="clearfloat"/>
</div>
<!-- Left Side Navigation ******************************** -->
<div id="leftside">
  <div id="leftside_inner"> <ul>
<li><a href="/index.php">Home</a>
</li><li><a href="/products.php">Products</a>
</li><li><a href="/jsyn/index.php">JSyn</a>
</li><li><a href="/pforth/index.php">pForth</a>
</li><li><a href="/music/index.php">Music</a>
</li><li><a href="/news/index.php">News</a>
</li><li><a href="/links/index.php">Links</a>
</li><li><a href="/contacts.php">Contact&nbsp;Us</a>
</li><li><a href="/aboutus.php">About&nbsp;Us</a>
</li></ul>
 </div>
</div>
<!-- Right Side Display ******************************** -->
<div id="rightside">
  <div id="rightside_inner">
  
  <h3>Projects</h3>
<table  border="1">
  <tr>
    <td><a href="/jsyn/">JSyn</a> - modular synthesis API for Java.</td>
  </tr>
  <tr>
    <td><a href="http://www.algomusic.com/jmsl/" target="_blank">JMSL</a> - Java Music Specification Language</td>
  </tr>
  <tr>
    <td><a href="http://www.portaudio.com/" target="_blank">PortAudio</a> - cross platform audio I/O API for 'C'</td>
  </tr>
</table>
<!-- data for adsense -->
    <script type="text/javascript"><!--
	  google_ad_client = "pub-1426437777355396";
	  google_ad_width = 160;
	  google_ad_height = 600;
	  google_ad_format = "160x600_as";
	  google_ad_type = "text";
	  google_ad_channel ="7963716298";
	  google_color_border = "B0E0E6";
	  google_color_bg = "FFFFFF";
	  google_color_link = "000000";
	  google_color_url = "336699";
	  google_color_text = "333333";
//--></script>
<!--
    <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
-->
  </div>
</div>
<div id="content">
<!-- Begin Content DIV ******************************** -->
<p class="navbar">
&nbsp;<a href="/pforth/index.php">pForth </a>&nbsp;|
&nbsp;<a href="http://code.google.com/p/pforth/">GoogleCode </a>&nbsp;|
&nbsp;<span class="current_link">Tutorial</span>&nbsp;|
&nbsp;<a href="/pforth/pf_ref.php">Reference </a>&nbsp;|
</p>

<HR size=4>
<CENTER>
<H1>
Forth Tutorial</H1></CENTER>

<HR WIDTH="100%">
<CENTER>
    Translations: <a href="http://vision.twbbs.org/%7Eletoh/forth/pf_tuttw.html" target="_blank">Chinese</a> by <a href="http://vision.twbbs.org/%7Eletoh/blog/?page_id=169" target="_blank">Letoh</a>
</CENTER>


<P>by <A HREF="http://www.softsynth.com/philburk.html">Phil Burk</A>
of <A HREF="http://www.softsynth.com">SoftSynth.com</A>
<H2>
Table of Contents</H2>

<UL>
<LI>
<A HREF="#Forth Syntax">Forth Syntax</A></LI>

<LI>
<A HREF="#The Stack">Stack Manipulation</A></LI>

<LI>
<A HREF="#Arithmetic">Arithmetic</A></LI>

<LI>
<A HREF="#Defining a New Word">Defining a New Word</A></LI>

<LI>
<A HREF="#More Arithmetic">More Arithmetic</A></LI>

<UL>
<LI>
<A HREF="#Arithmetic Overflow">Arithmetic Overflow</A></LI>

<LI>
<A HREF="#Convert Algebraic Expressions to Forth">Convert Algebraic Expressions
to Forth</A></LI>
</UL>

<LI>
<A HREF="#Character Input and Output">Character Input and Output</A></LI>

<LI>
<A HREF="#Compiling from Files">Compiling from Files</A></LI>

<LI>
<A HREF="#Variables">Variables</A></LI>

<LI>
<A HREF="#Constants">Constants</A></LI>

<LI>
<A HREF="#Logical Operators">Logical Operators</A></LI>

<LI>
<A HREF="#Conditionals - IF ELSE THEN CASE">Conditionals - IF ELSE THEN
CASE</A></LI>

<LI>
<A HREF="#Loops">Loops</A></LI>

<LI>
<A HREF="#Text Input and Output">Text Input and Output</A></LI>

<LI>
<A HREF="#Changing Numeric Base">Changing Numeric Base</A></LI>

<LI>
<A HREF="#Answers to Problems">Answers to Problems</A></LI>
</UL>
<p>The intent of this tutorial is to provide a series of experiments that
  will introduce you to the major concepts of Forth. It is only a starting
  point. Feel free to deviate from the sequences I provide. A free form investigation
  that is based on your curiosity is probably the best way to learn any language.
  Forth is especially well adapted to this type of learning.</p>
<P>This tutorial is written for the PForth implementation of the ANS Forth
standard. I have tried to restrict this tutorial to words that are part
of the ANS standard but some PForth specific words may have crept in.
<P>In the tutorials, I will print the things you need to type in upper
case, and indent them. You can enter them in upper or lower case. At the
end of each line, press the RETURN (or ENTER) key; this causes Forth to
interpret what you've entered.
<H2>
<A NAME="Forth Syntax"></A>Forth Syntax</H2>
<p>Forth has one of the simplest syntaxes of any computer language. The syntax
  can be stated as follows, "<B>Forth code is a bunch of words with spaces
    between them.</B>" This is even simpler than English! Each <I>word</I>
  is equivalent to a function or subroutine in a language like 'C'. They
  are executed in the order they appear in the code. The following statement,
  for example, could appear in a Forth program:</p>
<UL>
<PRE>&nbsp;<TT>WAKE.UP EAT.BREAKFAST WORK EAT.DINNER PLAY SLEEP</TT></PRE>
</UL>
<p>Notice that WAKE.UP has a dot between the WAKE and UP. The dot has no particular
  meaning to the Forth compiler. I simply used a dot to connect the two words
  together to make one word. Forth word names can have any combination of
  letters, numbers, or punctuation. We will encounter words with names like:</p>
<UL>
<PRE>&nbsp;." #S SWAP ! @ ACCEPT . *</PRE></UL>
<p>They are all called <I>words</I>. The word <B>$%%-GL7OP</B> is a legal
  Forth name, although not a very good one. It is up to the programmer to
  name words in a sensible manner.</p>
<P>Now it is time to run your Forth and begin experimenting. Please consult
the manual for your Forth for instructions on how to run it.
<H2>
<A NAME="The Stack"></A>Stack Manipulation</H2>
<p>The Forth language is based on the concept of a <I>stack</I>. Imagine a
  stack of blocks with numbers on them. You can add or remove numbers from
  the top of the stack. You can also rearrange the order of the numbers.
  Forth uses several stacks. The <I>DataStack </I>is the one used for passing
  data between Forth words so we will concentrate our attention there. The
  <I>Return Stack</I> is another Forth stack that is primarily for internal
  system use. In this tutorial, when we refer to the "stack," we will be
  referring to the Data Stack. </p>
<P>The stack is initially empty. To put some numbers on the stack, enter:
<UL>
<PRE><TT>23 7 9182</TT></PRE>
</UL>
<p>Let's now print the number on top of the stack using the Forth word ' <B>.</B> ', which is pronounced " dot ". This is a hard word to write about in a
  manual because it is a single period. </p>
<P>Enter: <B>.&nbsp;</B>
<P>You should see the last number you entered, 9182 , printed. Forth has
a very handy word for showing you what's on the stack. It is <B>.S</B>
, which is pronounced "dot S". The name was constructed from "dot" for
print, and "S" for stack. (PForth will automatically print the stack after
every line if the TRACE-STACK variable is set to TRUE.) If you enter:
<UL>
<PRE><TT>.S</TT></PRE>
</UL>
<p>you will see your numbers in a list. The number at the far right is the
  one on top of the stack.</p>
<P>You will notice that the 9182 is not on the stack. The word ' . ' removes
the number on top of the stack before printing it. In contrast, ' .S '
leaves the stack untouched.
<P>We have a way of documenting the effect of words on the stack with a
<I>stack diagram</I>. A stack diagram is contained in parentheses. In Forth,
the parentheses indicate a comment. In the examples that follow, you do
not need to type in the comments. When you are programming, of course,
we encourage the use of comments and stack diagrams to make your code more
readable. In this manual, we often indicate stack diagrams in <B>bold text</B>
like the one that follows. Do not type these in. The stack diagram for
a word like ' . ' would be:
<p><B><TT>. ( N -- , print number on top of stack )</TT></B></p>
<p>The symbols to the left of -- describe the parameters that a word expects
  to process. In this example, N stands for any integer number. To the right
  of --, up to the comma, is a description of the stack parameters when the
  word is finished, in this case there are none because 'dot' "eats" the
  N that was passed in. (Note that the stack descriptions are not necessary,
  but they are a great help when learning other peoples programs.) </p>
<P>The text following the comma is an English description of the word.
You will note that after the -- , N is gone. You may be concerned about
the fact that there were other numbers on the stack, namely 23 and 7 .
The stack diagram, however, only describes the portion of the stack that
is affected by the word. For a more detailed description of the stack diagrams,
there is a special section on them in this manual right before the main
glossary section.
<P>Between examples, you will probably want to clear the stack. If you
enter <B>0SP</B>, pronounced "zero S P", then the stack will be cleared.
<P>Since the stack is central to Forth, it is important to be able to alter
the stack easily. Let's look at some more words that manipulate the stack.
Enter:
<UL>
<PRE><TT>0SP .S \ That's a 'zero' 0, not an 'oh' O.
777 DUP .S</TT></PRE>
</UL>
<p>You will notice that there are two copies of 777 on the stack. The word
  <B>DUP</B> duplicates the top item on the stack. This is useful when you
  want to use the number on top of the stack and still have a copy. The stack
  diagram for DUP would be:</p>
<p><B><TT>DUP ( n -- n n , DUPlicate top of stack )</TT></B></p>
<p>Another useful word, is <B>SWAP</B>. Enter:</p>
<UL>
<PRE><TT>0SP&nbsp;
23 7 .S&nbsp;
SWAP .S&nbsp;
SWAP .S</TT></PRE>
</UL>
<p>The stack diagram for SWAP would be:</p>
<p><B><TT>SWAP ( a b -- b a , swap top two items on stack )</TT></B></p>
<p>Now enter:</p>
<UL>
<PRE><TT>OVER .S
OVER .S</TT></PRE>
</UL>
<p>The word <B>OVER</B> causes a copy of the second item on the stack to leapfrog
  over the first. It's stack diagram would be:</p>
<P><B><TT>OVER ( a b -- a b a , copy second item on stack )</TT></B>
<P>Here is another commonly used Forth word:
<P><B><TT>DROP ( a -- , remove item from the stack )</TT></B>
<P>Can you guess what we will see if we enter:
<UL>
<PRE><TT>0SP 11 22 .S
DROP .S</TT></PRE>
</UL>
<p>Another handy word for manipulating the stack is <B>ROT</B>. Enter:</p>
<UL>
<PRE><TT>0SP
11 22 33 44 .S
ROT .S</TT></PRE>
</UL>
<p>The stack diagram for ROT is, therefore:</p>
<P><B><TT>ROT ( a b c -- b c a , ROTate third item to top )&nbsp;</TT></B>
<P>You have now learned the more important stack manipulation words. You
will see these in almost every Forth program. I should caution you that
if you see too many stack manipulation words being used in your code then
you may want to reexamine and perhaps reorganize your code. You will often
find that you can avoid excessive stack manipulations by using <I>local
or global VARIABLES</I> which will be discussed later.
<P>If you want to grab any arbitrary item on the stack, use <B>PICK</B>
. Try entering:
<UL>
<PRE><TT>0SP
14 13 12 11 10
3 PICK . ( prints 13 )
0 PICK . ( prints 10 )
4 PICK .</TT></PRE>
</UL>
<p>PICK makes a copy of the Nth item on the stack. The numbering starts with
  zero, therefore:</p>
<UL><TT>0 PICK is equivalent to DUP</TT>
<BR><TT>1 PICK is equivalent to OVER</TT></UL>
<p><B><TT>PICK ( ... v3 v2 v1 v0 N -- ... v3 v2 v1 v0 vN )&nbsp;</TT></B></p>
<P>(Warning. The Forth-79 and FIG Forth standards differ from the ANS and
Forth '83 standard in that their PICK numbering starts with one, not zero.)
<P>I have included the stack diagrams for some other useful stack manipulation
words. Try experimenting with them by putting numbers on the stack and
calling them to get a feel for what they do. Again, the text in parentheses
is just a comment and need not be entered.
<P><B><TT>DROP ( n -- , remove top of stack )&nbsp;</TT></B>
<P><B><TT>?DUP ( n -- n n | 0 , duplicate only if non-zero, '|' means OR
)&nbsp;</TT></B>
<P><B><TT>-ROT ( a b c -- c a b , rotate top to third position )&nbsp;</TT></B>
<P><B><TT>2SWAP ( a b c d -- c d a b , swap pairs )&nbsp;</TT></B>
<P><B><TT>2OVER ( a b c d -- a b c d a b , leapfrog pair )&nbsp;</TT></B>
<P><B><TT>2DUP ( a b -- a b a b , duplicate pair )&nbsp;</TT></B>
<P><B><TT>2DROP ( a b -- , remove pair )&nbsp;</TT></B>
<P><B><TT>NIP ( a b -- b , remove second item from stack )&nbsp;</TT></B>
<P><B><TT>TUCK ( a b -- b a b , copy top item to third position )&nbsp;</TT></B>
<H3>
<A NAME="Problems - Stack"></A>Problems:</H3>
Start each problem by entering:
<UL>
<PRE><TT>0SP 11 22 33</TT></PRE>
</UL>
Then use the stack manipulation words you have learned to end up with the
following numbers on the stack:
<UL>
<PRE><TT>1) 11 33 22 22</TT></PRE>

<PRE><TT>2) 22 33</TT></PRE>

<PRE><TT>3) 22 33 11 11 22</TT></PRE>

<PRE><TT>4) 11 33 22 33 11</TT></PRE>

<PRE><TT>5) 33 11 22 11 22</TT></PRE>
</UL>
<A HREF="#Answers to Problems">Answers to the problems</A> can be found
at the end of this tutorial.
<H2>
<A NAME="Arithmetic"></A>Arithmetic</H2>
<p>Great joy can be derived from simply moving numbers around on a stack.
  Eventually, however, you'll want to do something useful with them. This
  section describes how to perform arithmetic operations in Forth. </p>
<P>The Forth arithmetic operators work on the numbers currently on top
of the stack. If you want to add the top two numbers together, use the
Forth word <B>+</B> , pronounced "plus". Enter:
<UL>
<PRE><TT>2 3 + .
2 3 + 10 + .</TT></PRE>
</UL>
<p>This style of expressing arithmetic operations is called <I>Reverse Polish
  Notation,</I> or<I> RPN</I>. It will already be familiar to those of you
  with HP calculators. In the following examples, I have put the algebraic
  equivalent representation in a comment.
  
</p>
<P>Some other arithmetic operators are <B>- * /</B> . Enter:
<UL>
<PRE><TT>30 5 - . ( 25=30-5 )
30 5 / . ( 6=30/5 )
30 5 * . ( 150=30*5 )
30 5 + 7 / . \ 5=(30+5)/7</TT></PRE>
</UL>
<p>Some combinations of operations are very common and have been coded in
  assembly language for speed. For example, <B>2*</B> is short for 2 * .
  You should use these whenever possible to increase the speed of your program.
  These include:
</p>
<UL>
<PRE><TT>1+ 1- 2+ 2- 2* 2/</TT></PRE>
</UL>
<p>Try entering: </p>
<UL>
<PRE><TT>10 1- .
7 2* 1+ . ( 15=7*2+1 )</TT></PRE>
</UL>
<p>One thing that you should be aware of is that when you are doing division
  with integers using / , the remainder is lost. Enter: </p>
<UL>
<PRE><TT>15 5 / .
17 5 / .</TT></PRE>
</UL>
<p>This is true in all languages on all computers. Later we will examine <B>/MOD</B>
  and <B>MOD</B> which do give the remainder.
</p>
<H2>
<A NAME="Defining a New Word"></A>Defining a New Word</H2>
<p>It's now time to write a <I>small program</I> in Forth. You can do this
  by defining a new word that is a combination of words we have already learned.
  Let's define and test a new word that takes the average of two numbers.
</p>
<p>We will make use of two new words, <B>:</B> ( "colon"), and <B>;</B> (
"semicolon") . These words start and end a typical <I>Forth definition</I>.
Enter:</p>

<UL>
<PRE><TT>: AVERAGE ( a b -- avg ) + 2/ ;</TT></PRE>
</UL>
<p>Congratulations. You have just written a Forth program. Let's look more
  closely at what just happened. The colon told Forth to add a new word to
  its list of words. This list is called the Forth dictionary. The name of
  the new word will be whatever name follows the colon. Any Forth words entered
  after the name will be compiled into the new word. This continues until
  the semicolon is reached which finishes the definition. </p>
<P>Let's test this word by entering:
<UL>
<PRE><TT>10 20 AVERAGE . ( should print 15 )</TT></PRE>
</UL>
<p>Once a word has been defined, it can be used to define more words. Let's
  write a word that tests our word.. Enter: </p>
<UL>
<PRE><TT>: TEST ( --) 50 60 AVERAGE . ;
TEST</TT></PRE>
</UL>
<p>Try combining some of the words you have learned into new Forth definitions
  of your choice. If you promise not to be overwhelmed, you can get a list
  of the words that are available for programming by entering: </p>
<UL>
<PRE><TT>WORDS</TT></PRE>
</UL>
<p>Don't worry, only a small fraction of these will be used directly in your
  programs. </p>
<H2>
<A NAME="More Arithmetic"></A>More Arithmetic</H2>
<p>When you need to know the remainder of a divide operation. /MOD will return
  the remainder as well as the quotient. the word MOD will only return the
  remainder. Enter: </p>
<UL>
<PRE><TT>0SP
53 10 /MOD .S
0SP
7 5 MOD .S</TT></PRE>
</UL>
<p>Two other handy words are <B>MIN</B> and <B>MAX</B> . They accept two numbers
  and return the MINimum or MAXimum value respectively. Try entering the
  following:
</p>
<UL>
<PRE><TT>56 34 MAX .
56 34 MIN .
-17 0 MIN .</TT></PRE>
</UL>
Some other useful words are:

<P><B><TT>ABS ( n -- abs(n) , absolute value of n )&nbsp;</TT></B>
<P><B><TT>NEGATE ( n -- -n , negate value, faster then -1 * )&nbsp;</TT></B>
<P><B><TT>LSHIFT ( n c -- n&lt;&lt;c , left shift of n )&nbsp;</TT></B>
<P><B><TT>RSHIFT ( n c -- n>>c , logical right shift of n )&nbsp;</TT></B>
<P><B><TT>ARSHIFT ( n c -- n>>c ) , arithmetic right shift of n )&nbsp;</TT></B>
<P>ARSHIFT or LSHIFT can be used if you have to multiply quickly by a power
of 2 . A right shift is like doing a divide by 2. This is often faster
than doing a regular multiply or divide. Try entering:
<UL>
<PRE><TT>: 256* 8 LSHIFT ;
3 256* .</TT></PRE>
</UL>

<H3>
<A NAME="Arithmetic Overflow"></A>Arithmetic Overflow</H3>
<p>If you are having problems with your calculation overflowing the 32-bit
  precision of the stack, then you can use <B>*/</B> . This produces an intermediate
  result that is 64 bits long. Try the following three methods of doing the
  same calculation. Only the one using */ will yield the correct answer,
  5197799.
</p>
<UL>
<PRE><TT>34867312 99154 * 665134 / .
34867312 665134 / 99154 * .
34867312 99154 665134 */ .</TT></PRE>
</UL>

<H4>
<A NAME="Convert Algebraic Expressions to Forth"></A>Convert Algebraic
Expressions to Forth</H4>
<p>How do we express complex algebraic expressions in Forth? For example:
  20 + (3 * 4) </p>
<P>To convert this to Forth you must order the operations in the order
of evaluation. In Forth, therefore, this would look like:
<UL>
<PRE>3 4 * 20 +</PRE>
</UL>
<p>Evaluation proceeds from left to right in Forth so there is no ambiguity.
  Compare the following algebraic expressions and their Forth equivalents:
  (Do <B>not</B> enter these!)</p>

<UL>
  <PRE>(100+50)/2 ==> 100 50 + 2/
((2*7) + (13*5)) ==> 2 7 * 13 5 * +</PRE>
</UL>
<p>If any of these expressions puzzle you, try entering them one word at a
  time, while viewing the stack with .S . </p>
<H3>
<A NAME="Problems - Square"></A>Problems:</H3>
<p>Convert the following algebraic expressions to their equivalent Forth expressions.
  (Do <B>not</B> enter these because they are not Forth code!)
</p>
<UL>
<PRE>(12 * ( 20 - 17 ))</PRE>

<PRE>(1 - ( 4 * (-18) / 6) )</PRE>

<PRE>( 6 * 13 ) - ( 4 * 2 * 7 )</PRE>
</UL>
<p>Use the words you have learned to write these new words: </p>
<UL>
<PRE><TT>SQUARE ( N -- N*N , calculate square )</TT></PRE>

<PRE><TT>DIFF.SQUARES ( A B -- A*A-B*B , difference of squares )</TT></PRE>

<PRE><TT>AVERAGE4 ( A B C D -- [A+B+C+D]/4 )</TT></PRE>

<PRE>HMS>SECONDS ( HOURS MINUTES SECONDS -- TOTAL-SECONDS , convert )</PRE>
</UL>
<A HREF="#Answers to Problems">Answers to the problems</A> can be found
at the end of this tutorial.
<H2>
<A NAME="Character Input and Output"></A>Character Input and Output</H2>
<p>The numbers on top of the stack can represent anything. The top number
  might be how many blue whales are left on Earth or your weight in kilograms.
  It can also be an ASCII character. Try entering the following: </p>
<UL>
<PRE><TT>72 EMIT 105 EMIT</TT></PRE>
</UL>
<p>You should see the word "Hi" appear before the OK. The 72 is an ASCII 'H'
  and 105 is an 'i'. EMIT takes the number on the stack and outputs it as
  a character. If you want to find the ASCII value for any character, you
  can use the word ASCII . Enter:
</p>
<UL>
<PRE><TT>CHAR W .
CHAR % DUP . EMIT
CHAR A DUP .
32 + EMIT</TT></PRE>
</UL>
<p>Here is a complete <a href="http://www.asciitable.com/">ASCII chart</a>. </p>
<P>Notice that the word CHAR is a bit unusual because its input comes not
from the stack, but from the following text. In a stack diagram, we represent
that by putting the input in angle brackets, &lt;input>. Here is the stack
diagram for CHAR.
<P><B><TT>CHAR ( &lt;char> -- char , get ASCII value of a character )&nbsp;</TT></B>
<P>Using EMIT to output character strings would be very tedious. Luckily
there is a better way. Enter:
<UL>
<PRE><TT>: TOFU ." Yummy bean curd!" ;
TOFU</TT></PRE>
</UL>
<p>The word <B>."</B> , pronounced "dot quote", will take everything up to
  the next quotation mark and print it to the screen. Make sure you leave
  a space after the first quotation mark. When you want to have text begin
  on a new line, you can issue a carriage return using the word <B>CR</B>
  . Enter:
</p>
<UL>
<PRE><TT>: SPROUTS ." Miniature vegetables." ;
: MENU
&nbsp;&nbsp;&nbsp; CR TOFU CR SPROUTS CR
;
MENU</TT></PRE>
</UL>
<p>You can emit a blank space with <B>SPACE</B> . A number of spaces can be
  output with SPACES . Enter:
</p>
<UL>
<PRE><TT>CR TOFU SPROUTS
CR TOFU SPACE SPROUTS
CR 10 SPACES TOFU CR 20 SPACES SPROUTS</TT></PRE>
</UL>
<p>For character input, Forth uses the word <B>KEY</B> which corresponds to
  the word EMIT for output. KEY waits for the user to press a key then leaves
  its value on the stack. Try the following.
</p>
<UL>
<PRE><TT>: TESTKEY ( -- )
&nbsp;&nbsp;&nbsp; ." Hit a key: " KEY CR
&nbsp;&nbsp;&nbsp; ." That = " . CR
;
TESTKEY</TT></PRE>
</UL>
[Note: On some computers, the input if buffered so you will need to hit
the ENTER key after typing your character.]

<P><B><TT>EMIT ( char -- , output character )&nbsp;</TT></B>
<P><B><TT>KEY ( -- char , input character )&nbsp;</TT></B>
<P><B><TT>SPACE ( -- , output a space )&nbsp;</TT></B>
<P><B><TT>SPACES ( n -- , output n spaces )&nbsp;</TT></B>
<P><B><TT>CHAR ( &lt;char> -- char , convert to ASCII )&nbsp;</TT></B>
<P><B><TT>CR ( -- , start new line , carriage return )&nbsp;</TT></B>
<P><B><TT>." ( -- , output " delimited text )&nbsp;</TT></B>
<H2>
<BR>
<BR>
<A NAME="Compiling from Files"></A>Compiling from Files</H2>
<p>PForth can read read from ordinary text files so you can use any editor
  that you wish to write your programs. </p>
<H3>
Sample Program</H3>
<p>Enter into your file, the following code. </p>
<UL>
<PRE><TT>\ Sample Forth Code
\ Author: <I>your name</I></TT></PRE>

<PRE><TT>: SQUARE ( n -- n*n , square number )
&nbsp;&nbsp;&nbsp; DUP *
;</TT></PRE>

<PRE><TT>: TEST.SQUARE ( -- )
&nbsp;&nbsp;&nbsp; CR ." 7 squared = "
&nbsp;&nbsp;&nbsp; 7 SQUARE . CR
;</TT></PRE>
</UL>
<p>Now save the file to disk. </p>
<P>The text following the <B>\</B> character is treated as a comment. This
would be a REM statement in BASIC or a /*---*/ in 'C'. The text in parentheses
is also a comment.
<H3>
Using INCLUDE</H3>
<p>"INCLUDE" in Forth means to compile from a file.
  
</p>
<P>You can compile this file using the INCLUDE command. If you saved your
file as WORK:SAMPLE, then compile it by entering:
<UL>
<PRE><TT>INCLUDE SAMPLE.FTH</TT></PRE>
</UL>
<p>Forth will compile your file and tell you how many bytes it has added to
  the dictionary. To test your word, enter: </p>
<UL>
<PRE><TT>TEST.SQUARE</TT></PRE>
</UL>
<p>Your two words, SQUARE and TEST.SQUARE are now in the Forth dictionary.
  We can now do something that is very unusual in a programming language.
  We can "uncompile" the code by telling Forth to <B>FORGET</B> it. Enter:
</p>
<UL>
<PRE><TT>FORGET SQUARE</TT></PRE>
</UL>
<p>This removes SQUARE and everything that follows it, ie. TEST.SQUARE, from
  the dictionary. If you now try to execute TEST.SQUARE it won't be found. </p>
<P>Now let's make some changes to our file and reload it. Go back into
the editor and make the following changes: (1) Change TEST.SQUARE to use
15 instead of 7 then (2) Add this line right before the definition of SQUARE:
<UL>
<PRE><TT>ANEW TASK-SAMPLE.FTH</TT></PRE>
</UL>
<p>Now Save your changes and go back to the Forth window. </p>
<P>You're probably wondering what the line starting with <B>ANEW</B> was
for. ANEW is always used at the beginning of a file. It defines a special
marker word in the dictionary before the code. The word typically has "TASK-"
as a prefix followed by the name of the file. When you ReInclude a file,
ANEW will automatically FORGET the old code starting after the ANEW statement.
This allows you to Include a file over and over again without having to
manually FORGET the first word. If the code was not forgotten, the dictionary
would eventually fill up.
<P>If you have a big project that needs lots of files, you can have a file
that will load all the files you need. Sometimes you need some code to
be loaded that may already be loaded. The word <B>INCLUDE?</B> will only
load code if it isn't already in the dictionary. In this next example,
I assume the file is on the volume WORK: and called SAMPLE. If not, please
substitute the actual name. Enter:
<UL>
<PRE><TT>FORGET TASK-SAMPLE.FTH
INCLUDE? SQUARE WORK:SAMPLE
INCLUDE? SQUARE WORK:SAMPLE</TT></PRE>
</UL>
<p>Only the first INCLUDE? will result in the file being loaded. </p>
<H2>
<A NAME="Variables"></A>Variables</H2>
<p>Forth does not rely as heavily on the use of variables as other compiled
  languages. This is because values normally reside on the stack. There are
  situations, of course, where variables are required. To create a variable,
  use the word <B>VARIABLE</B> as follows:
</p>
<UL>
<PRE><TT>VARIABLE MY-VAR</TT></PRE>
</UL>
<p>This created a variable named MY-VAR . A space in memory is now reserved
  to hold its 32-bit value. The word VARIABLE is what's known as a "defining
  word" since it creates new words in the dictionary. Now enter:
</p>
<UL>
<PRE><TT>MY-VAR .</TT></PRE>
</UL>
<p>The number you see is the address, or location, of the memory that was
  reserved for MY-VAR. To store data into memory you use the word <B>!</B>
  , pronounced "store". It looks like an exclamation point, but to a Forth
  programmer it is the way to write 32-bit data to memory. To read the value
  contained in memory at a given address, use the Forth word <B>@</B> , pronounced
  "fetch". Try entering the following:
</p>
<UL>
<PRE><TT>513 MY-VAR !
MY-VAR @ .</TT></PRE>
</UL>
<p>This sets the variable MY-VAR to 513 , then reads the value back and prints
  it. The stack diagrams for these words follows: </p>
<P><B><TT>@ ( address -- value , FETCH value FROM address in memory )&nbsp;</TT></B>
<P><B><TT>! ( value address -- , STORE value TO address in memory )</TT></B>
<P><B><TT>VARIABLE ( &lt;name> -- , define a 4 byte memory storage location)</TT></B>
<P>A handy word for checking the value of a variable is <B>? </B>, pronounced
"question". Try entering:
<UL>
<PRE><TT>MY-VAR ?</TT></PRE>
</UL>
<p>If ? wasn't defined, we could define it as: </p>
<UL>
<PRE><TT>: ? ( address -- , look at variable )
&nbsp;&nbsp;&nbsp; @ .
;</TT></PRE>
</UL>
<p>Imagine you are writing a game and you want to keep track of the highest
  score. You could keep the highest score in a variable. When you reported
  a new score, you could check it aginst the highest score. Try entering
  this code in a file as described in the previous section: </p>
<UL>
<PRE><TT>VARIABLE HIGH-SCORE</TT></PRE>

<PRE><TT>: REPORT.SCORE ( score -- , print out score )
&nbsp;&nbsp;&nbsp; DUP CR ." Your Score = " . CR
&nbsp;&nbsp;&nbsp; HIGH-SCORE @ MAX ( calculate new high )
&nbsp;&nbsp;&nbsp; DUP ." Highest Score = " . CR
&nbsp;&nbsp;&nbsp; HIGH-SCORE ! ( update variable )
;</TT></PRE>
</UL>
<p>Save the file to disk, then compile this code using the INCLUDE word. Test
  your word as follows: </p>
<UL>
<PRE><TT>123 REPORT.SCORE
9845 REPORT.SCORE
534 REPORT.SCORE</TT></PRE>
</UL>
<p>The Forth words @ and ! work on 32-bit quantities. Some Forths are "16-bit"
  Forths. They fetch and store 16-bit quantities. Forth has some words that
  will work on 8 and 16-bit values. C@ and C! work characters which are usually
  for 8-bit bytes. The 'C' stands for "Character" since ASCII characters
  are 8-bit numbers. Use W@ and W! for 16-bit "Words."
  
</p>
<P>Another useful word is <B>+!</B> , pronounced "plus store." It adds
  a value to a 32-bit value in memory. Try:
<UL>
<PRE><TT>20 MY-VAR !
5 MY-VAR +!
MY-VAR @ .</TT></PRE>
</UL>
<p>Forth also provides some other words that are similar to VARIABLE. Look
  in the glossary for VALUE and ARRAY. Also look at the section on "<A HREF="pf_ref.php#Local Variables { foo --}?">local
    variables</A>" which are variables which only exist on the stack while
  a Forth word is executing.
  
</p>
<P><I>A word of warning about fetching and storing to memory</I>: You have
now learned enough about Forth to be dangerous. The operation of a computer
is based on having the right numbers in the right place in memory. You
now know how to write new numbers to any place in memory. Since an address
is just a number, you could, but shouldn't, enter:
<UL>
<PRE><TT>73 253000 ! ( Do NOT do this. )</TT></PRE>
</UL>
<p>The 253000 would be treated as an address and you would set that memory
  location to 73. I have no idea what will happen after that, maybe nothing.
  This would be like firing a rifle through the walls of your apartment building.
  You don't know who or what you are going to hit. Since you share memory
  with other programs including the operating system, you could easily cause
  the computer to behave strangely, even crash. Don't let this bother you
  too much, however. Crashing a computer, unlike crashing a car, does not
  hurt the computer. You just have to reboot. The worst that could happen
  is that if you crash while the computer is writing to a disk, you could
  lose a file. That's why we make backups. This same potential problem exists
  in any powerful language, not just Forth. This might be less likely in
  BASIC, however, because BASIC protects you from a lot of things, including
  the danger of writing powerful programs. </p>
<P>Another way to get into trouble is to do what's called an "odd address
memory access." The 68000 processor arranges words and longwords, 16 and
32 bit numbers, on even addresses. If you do a <B>@</B> or <B>!</B> , or
<B>W@</B> or <B>W!</B> , to an odd address, the 68000 processor will take
exception to this and try to abort.
<P>Forth gives you some protection from this by trapping this exception
and returning you to the OK prompt. If you really need to access data on
an odd address, check out the words <B>ODD@</B> and <B>ODD!</B> in the
glossary. <B>C@</B> and <B>C!</B> work fine on both odd and even addresses.
<H2>
<A NAME="Constants"></A>Constants</H2>
<p>If you have a number that is appearing often in your program, we recommend
  that you define it as a "constant." Enter:
</p>
<UL>
<PRE><TT>128 CONSTANT MAX_CHARS
MAX_CHARS .</TT></PRE>
</UL>
<p>We just defined a word called MAX_CHARS that returns the value on the stack
  when it was defined. It cannot be changed unless you edit the program and
  recompile. Using <B>CONSTANT</B> can improve the readability of your programs
  and reduce some bugs. Imagine if you refer to the number 128 very often
  in your program, say 8 times. Then you decide to change this number to
  256. If you globally change 128 to 256 you might change something you didn't
  intend to. If you change it by hand you might miss one, especially if your
  program occupies more than one file. Using CONSTANT will make it easy to
  change. The code that results is equally as fast and small as putting the
  numbers in directly. I recommend defining a constant for almost any number.
</p>
<H2>
<A NAME="Logical Operators"></A>Logical Operators</H2>
<p>These next two sections are concerned with decision making. This first
  section deals with answering questions like "Is this value too large?"
  or "Does the guess match the answer?". The answers to questions like these
  are either TRUE or FALSE. Forth uses a 0 to represent <B>FALSE</B> and
  a -1 to represent <B>TRUE</B>. TRUE and FALSE have been capitalized because
  they have been defined as Forth constants. Try entering:
</p>
<UL>
<PRE><TT>23 71 = .
18 18 = .</TT></PRE>
</UL>
<p>You will notice that the first line printed a 0, or FALSE, and the second
  line a -1, or TRUE. The equal sign in Forth is used as a question, not
  a statement. It asks whether the top two items on the stack are equal.
  It does not set them equal. There are other questions that you can ask.
  Enter: </p>
<UL>
<PRE><TT>23 198 &lt; .
23 198 > .
254 15 > .</TT></PRE>
</UL>
<p>In California, the drinking age for alcohol is 21. You could write a simple
  word now to help bartenders. Enter: </p>
<UL>
<PRE><TT>: DRINK? ( age -- flag , can this person drink? )
&nbsp;&nbsp;&nbsp; 20 >
;</TT></PRE>

<PRE><TT>20 DRINK? .
21 DRINK? .
43 DRINK? .</TT></PRE>
</UL>
<p>The word FLAG in the stack diagram above refers to a logical value. </p>
<P>Forth provides special words for comparing a number to 0. They are <B>0=</B>
<B>0></B> and <B>0&lt;</B> . Using 0> is faster than calling 0 and > separately.
Enter:
<UL><TT>23 0> . ( print -1 )</TT>
<BR><TT>-23 0> . ( print 0 )</TT>
<BR><TT>23 0= . ( print 0 )</TT></UL>
<p>For more complex decisions, you can use the <I>Boolean</I> operators <B>OR</B>
  , <B>AND</B> , and <B>NOT</B> . OR returns a TRUE if either one or both
  of the top two stack items are true.
</p>
<UL>
<PRE><TT>TRUE TRUE OR .
TRUE FALSE OR .
FALSE FALSE OR .</TT></PRE>
</UL>
<p>AND only returns a TRUE if both of them are true. </p>
<UL>
<PRE><TT>TRUE TRUE AND .
TRUE FALSE AND .</TT></PRE>
</UL>
<p>NOT reverses the value of the flag on the stack. Enter: </p>
<UL>
<PRE><TT>TRUE .
TRUE NOT .</TT></PRE>
</UL>
<p>Logical operators can be combined. </p>
<UL>
<PRE><TT>56 3 > 56 123 &lt; AND .
23 45 = 23 23 = OR .</TT></PRE>
</UL>
<p>Here are stack diagrams for some of these words. See the glossary for a
  more complete list. </p>
<P><B><TT>&lt; ( a b -- flag , flag is true if A is less than B )</TT></B>
<P><B><TT>> ( a b -- flag , flag is true if A is greater than B )</TT></B>
<P><B><TT>= ( a b -- flag , flag is true if A is equal to B )</TT></B>
<P><B><TT>0= ( a -- flag , true if a equals zero )</TT></B>
<P><B><TT>OR ( a b -- a||b , perform logical OR of bits in A and B )</TT></B>
<P><B><TT>AND ( a b -- a&amp;b , perform logical AND of bits in A and B
)</TT></B>
<P><B><TT>NOT ( flag -- opposite-flag , true if false, false if true )</TT></B>
<H3>
<A NAME="Problems - Logical"></A>Problems:</H3>
<p>1) Write a word called LOWERCASE? that returns TRUE if the number on top
  of the stack is an ASCII lowercase character. An ASCII 'a' is 97 . An ASCII
  'z' is 122 . Test using the characters " A ` a q z { ".
</p>
<UL>
<PRE><TT>CHAR A LOWERCASE? . ( should print 0 )
CHAR a LOWERCASE? . ( should print -1 )</TT></PRE>
</UL>
<A HREF="#Answers to Problems">Answers to the problems</A> can be found
at the end of this tutorial.
<H2>
<A NAME="Conditionals - IF ELSE THEN CASE"></A>Conditionals - IF ELSE THEN
CASE</H2>
<p>You will now use the TRUE and FALSE flags you learned to generate in the
  last section. The "flow of control" words accept flags from the stack,
  and then possibly "branch" depending on the value. Enter the following
  code.
</p>
<UL>
<PRE><TT>: .L ( flag -- , print logical value )
&nbsp;&nbsp;&nbsp; IF ." True value on stack!"
&nbsp;&nbsp;&nbsp; ELSE ." False value on stack!"
&nbsp;&nbsp;&nbsp; THEN
;</TT></PRE>

<PRE><TT>0 .L
FALSE .L
TRUE .L
23 7 &lt; .L</TT></PRE>
</UL>
<p>You can see that when a TRUE was on the stack, the first part got executed.
  If a FALSE was on the stack, then the first part was skipped, and the second
  part was executed. One thing you will find interesting is that if you enter: </p>
<UL>
<PRE><TT>23 .L</TT></PRE>
</UL>
<p>the value on the stack will be treated as true. The flow of control words
  consider any value that does not equal zero to be TRUE. </p>
<P>The <B>ELSE</B> word is optional in the <B>IF...THEN</B> construct.
Try the following:
<UL>
<PRE><TT>: BIGBUCKS? ( amount -- )
&nbsp;&nbsp;&nbsp; 1000 >
&nbsp;&nbsp;&nbsp; IF ." That's TOO expensive!"
&nbsp;&nbsp;&nbsp; THEN
;</TT></PRE>

<PRE><TT>531 BIGBUCKS?
1021 BIGBUCKS?</TT></PRE>
</UL>
<p>Many Forths also support a <B>CASE</B> statement similar to switch() in
  'C'. Enter:
</p>
<UL>
<PRE><TT>: TESTCASE ( N -- , respond appropriately )
&nbsp;&nbsp;&nbsp; CASE
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 OF ." Just a zero!" ENDOF
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 OF ." All is ONE!" ENDOF
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 OF WORDS ENDOF
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DUP . ." Invalid Input!"
&nbsp;&nbsp;&nbsp; ENDCASE CR
;</TT></PRE>

<PRE><TT>0 TESTCASE
1 TESTCASE
</TT>5 TESTCASE</PRE>
</UL>
<p>See CASE in the glossary for more information. </p>
<H3>
<A NAME="Problems - Conditionals"></A>Problems:</H3>
<p>1) Write a word called DEDUCT that subtracts a value from a variable containing
  your checking account balance. Assume the balance is in dollars. Print
  the balance. Print a warning if the balance is negative. </p>
<UL>
<PRE><TT>VARIABLE ACCOUNT</TT></PRE>

<PRE><TT>: DEDUCT ( n -- , subtract N from balance )
&nbsp;&nbsp;&nbsp; ????????????????????????????????? ( you fill this in )
;</TT></PRE>

<PRE><TT>300 ACCOUNT ! ( initial funds )
40 DEDUCT ( prints 260 )
200 DEDUCT ( print 60 )
100 DEDUCT ( print -40 and give warning! )</TT></PRE>
</UL>
<A HREF="#Answers to Problems">Answers to the problems</A> can be found
at the end of this tutorial.
<H2>
<A NAME="Loops"></A>Loops</H2>
<p>Another useful pair of words is <B>BEGIN...UNTIL</B> . These are used to
  loop until a given condition is true. Try this:
</p>
<UL>
<PRE><TT>: COUNTDOWN&nbsp; ( N -- )
&nbsp;&nbsp;&nbsp; BEGIN
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; DUP . CR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( print number on top of stack )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1-&nbsp; DUP&nbsp; 0&lt;&nbsp;&nbsp;&nbsp; ( loop until we go negative )
&nbsp;&nbsp;&nbsp; UNTIL
;</TT></PRE>

<PRE><TT>16 COUNTDOWN</TT></PRE>
</UL>
<p>This word will count down from N to zero. </p>
<P>If you know how many times you want a loop to execute, you can use the
<B>DO...LOOP</B> construct. Enter:
<UL>
<PRE><TT>: SPELL
&nbsp;&nbsp;&nbsp; ." ba"
&nbsp;&nbsp;&nbsp; 4 0 DO
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ." na"
&nbsp;&nbsp;&nbsp; LOOP
;</TT></PRE>
</UL>
<p>This will print "ba" followed by four occurrences of "na". The ending value
  is placed on the stack before the beginning value. Be careful that you
  don't pass the values in reverse. Forth will go "the long way around" which
  could take awhile. The reason for this order is to make it easier to pass
  the loop count into a word on the stack. Consider the following word for
  doing character graphics. Enter:
</p>
<UL>
<PRE><TT>: PLOT# ( n -- )
&nbsp;&nbsp;&nbsp; 0 DO
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; [CHAR] - EMIT
&nbsp;&nbsp;&nbsp; LOOP CR
;</TT></PRE>

<PRE><TT>CR 9 PLOT# 37 PLOT#</TT></PRE>
</UL>
<p>If you want to access the loop counter you can use the word I . Here is
  a simple word that dumps numbers and their associated ASCII characters. </p>
<UL>
<PRE><TT>: .ASCII ( end start -- , dump characters )
&nbsp;&nbsp;&nbsp; DO
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; CR I . I EMIT
&nbsp;&nbsp;&nbsp; LOOP CR
;</TT></PRE>

<PRE><TT>80 64 .ASCII</TT></PRE>
</UL>
<p>If you want to leave a DO LOOP before it finishes, you can use the word <B>LEAVE</B>. Enter:
</p>
<UL>
<PRE><TT>: TEST.LEAVE&nbsp; ( -- , show use of leave )
&nbsp;&nbsp;&nbsp; 100 0
&nbsp;&nbsp;&nbsp; DO
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I . CR&nbsp; \ print loop index
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I 20 >&nbsp; \ is I over 20
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; IF
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LEAVE
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; THEN
&nbsp;&nbsp;&nbsp; LOOP
;
TEST.LEAVE&nbsp; \ will print 0 to 20</TT></PRE>
</UL>
<p>Please consult the manual to learn about the following words <B>+LOOP</B>
  and <B>RETURN</B> . FIXME
  
</p>
<P>Another useful looping construct is the <B>BEGIN WHILE REPEAT</B> loop.
This allows you to make a test each time through the loop before you actually
do something. The word WHILE will continue looping if the flag on the stack
is True. Enter:
<UL>
<PRE><TT>: SUM.OF.N ( N -- SUM[N] , calculate sum of N integers )
&nbsp;&nbsp;&nbsp; 0&nbsp; \ starting value of SUM
&nbsp;&nbsp;&nbsp; BEGIN
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OVER 0>&nbsp;&nbsp; \ Is N greater than zero?
&nbsp;&nbsp;&nbsp; WHILE
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OVER +&nbsp; \ add N to sum
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SWAP 1- SWAP&nbsp; \ decrement N
&nbsp;&nbsp;&nbsp; REPEAT
&nbsp;&nbsp;&nbsp; SWAP DROP&nbsp; \ get rid on N
;</TT></PRE>

<PRE><TT>4 SUM.OF.N&nbsp;&nbsp;&nbsp; \ prints 10&nbsp;&nbsp; ( 1+2+3+4 )</TT></PRE>
</UL>

<H3>
<A NAME="Problems - Loops"></A>Problems:</H3>
<p>1) Rewrite SUM.OF.N using a DO LOOP. </p>
<P>2) Rewrite SUM.OF.N using BEGIN UNTIL.
<P>3) For bonus points, write SUM.OF.N without using any looping or conditional
construct!
<P><A HREF="#Answers to Problems">Answers to the problems</A> can be found
at the end of this tutorial.
<H2>
<A NAME="Text Input and Output"></A>Text Input and Output</H2>
<p>You learned earlier how to do single character I/O. This section concentrates
  on using strings of characters. You can embed a text string in your program
  using S". Note that you must follow the S" by one space. The text string
  is terminated by an ending " .Enter:
</p>
<UL>
<PRE>: TEST S" Hello world!" ;
TEST .S</PRE>
</UL>
<p>Note that TEST leaves two numbers on the stack. The first number is the
  address of the first character. The second number is the number of characters
  in the string. You can print the characters of the string as follows. </p>
<UL>
<PRE>TEST DROP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; \ get rid of number of characters
DUP C@ EMIT&nbsp;&nbsp;&nbsp;&nbsp; \ prints first character, 'H'
CHAR+ DUP C@ EMIT&nbsp; \ prints second character, 'e'
\ and so on</PRE>
</UL>
<p>CHAR+ advances the address to the next character. You can print the entire
  string using TYPE. </p>
<UL>
<PRE>TEST&nbsp; TYPE
TEST&nbsp; 2/&nbsp; TYPE&nbsp;&nbsp; \ print half of string</PRE>
</UL>
<p>It would be nice if we could simply use a single address to describe a
  string and not have to pass the number of characters around. 'C' does this
  by putting a zero at the end of the string to show when it ends. Forth
  has a different solution. A text string in Forth consists of a character
  count in the first byte, followed immediately by the characters themselves.
  This type of character string can be created using the Forth word C" ,
  pronounced 'c quote'. Enter:
</p>
<UL>
<PRE><TT>: T2 C" Greetings Fred" ;
T2 .</TT></PRE>
</UL>
<p>The number that was printed was the address of the start of the string.
  It should be a byte that contains the number of characters. Now enter: </p>
<UL>
<PRE><TT>T2 C@ .</TT></PRE>
</UL>
<p>You should see a 14 printed. Remember that C@ fetches one character/byte
  at the address on the stack. You can convert a counted Forth string to
  an address and count using COUNT. </p>
<UL>
<PRE><TT>T2 COUNT .S
TYPE</TT></PRE>
</UL>
<p>The word <B>COUNT</B> extracts the number of characters and their starting
  address. COUNT will only work with strings of less than 256 characters,
  since 255 is the largest number that can be stored in the count byte. TYPE
  will, however, work with longer strings since the length is on the stack.
  Their stack diagrams follow:
  
</p>
<P><B><TT>CHAR+ ( address -- address' , add the size of one character )</TT></B>
<P><B><TT>COUNT ( $addr -- addr #bytes , extract string information )&nbsp;</TT></B>
<P><B><TT>TYPE ( addr #bytes -- , output characters at addr )</TT></B>
<P>The $addr is the address of a count byte. The dollar sign is often used
to mark words that relate to strings.
<P>You can easily input a string using the word <B>ACCEPT</B>. (You may
want to put these upcoming examples in a file since they are very handy.)
The word <B>ACCEPT </B>receives characters from the keyboard and places
them at any specified address. <B>ACCEPT </B>takes input characters until
a maximum is reached or an end of line character is entered. <B>ACCEPT
</B>returns the number of characters entered. You can write a word for
entering text. Enter:
<UL>
<PRE><TT>: INPUT$ ( -- $addr )
&nbsp;&nbsp;&nbsp; PAD&nbsp; 1+ ( leave room for byte count )
&nbsp;&nbsp;&nbsp; 127 ACCEPT ( recieve a maximum of 127 chars )
&nbsp;&nbsp;&nbsp; PAD C! ( set byte count )
&nbsp;&nbsp;&nbsp; PAD ( return address of string )
;</TT></PRE>

<PRE><TT>INPUT$ COUNT TYPE</TT></PRE>
</UL>
<p>Enter a string which should then be echoed. You could use this in a program
  that writes form letters. </p>
<UL>
<PRE><TT>: FORM.LETTER ( -- )
&nbsp;&nbsp;&nbsp; ." Enter customer's name." CR
&nbsp;&nbsp;&nbsp; INPUT$
&nbsp;&nbsp;&nbsp; CR ." Dear " DUP COUNT TYPE CR
&nbsp;&nbsp;&nbsp; ." Your cup that says " COUNT TYPE
&nbsp;&nbsp;&nbsp; ." is in the mail!" CR
;</TT></PRE>
</UL>
<B><TT>ACCEPT ( addr maxbytes -- numbytes , input text, save at address
)&nbsp;</TT></B>

<P>You can use your word INPUT$ to write a word that will read a number
from the keyboard. Enter:
<UL>
<PRE><TT>: INPUT# ( -- N true | false )
&nbsp;&nbsp;&nbsp; INPUT$ ( get string )
&nbsp;&nbsp;&nbsp; NUMBER? ( convert to a string if valid )
&nbsp;&nbsp;&nbsp; IF DROP TRUE ( get rid of high cell )
&nbsp;&nbsp;&nbsp; ELSE FALSE
&nbsp;&nbsp;&nbsp; THEN
;</TT></PRE>
</UL>
<p>This word will return a single-precision number and a TRUE, or it will
  just return FALSE. The word <B>NUMBER?</B> returns a double precision number
  if the input string contains a valid number. Double precision numbers are
  64-bit so we DROP the top 32 bits to get a single-precision 32 bit number.
</p>
<H2>
<A NAME="Changing Numeric Base"></A>Changing Numeric Base</H2>
<p>For day-to-day life, the numbering system we use is decimal, or "base 10." That means each digit get multiplied by a power of 10. Thus a number
  like 527 is equal to (5*100 + 2*10 + 7*1). The use of 10 for the numeric
  base is a completely arbitrary decision. It no doubt has something to do
  with the fact that most people have 10 fingers (including thumbs). The
  Babylonians used base 60, which is where we got saddled with the concept
  of 60 minutes in an hour. Computer hardware uses base 2, or "binary". The
  computer number  &quot;1101&quot; is equal to (1*8 + 1*4 + 0*2 + 1*1). If you add
  these up, you get 8+4+1=13 . The binary number &quot;10&quot;  is (1*2 + 0*1), or 2. Likewise
  the numeric string &quot;10&quot; in any base N is N.
  
</p>
<P>Forth makes it very easy to explore different numeric bases because
it can work in any base. Try entering the following:</P>
<UL>
<PRE><TT>DECIMAL 6 BINARY .
1 1 + .
1101 DECIMAL .</TT></PRE>
</UL>
<p>Another useful numeric base is <I>hexadecimal</I>. which is base 16. One
  problem with bases over 10 is that our normal numbering system only has
  digits 0 to 9. For hex numbers we use the letters A to F for the digits
  10 to 15. Thus the hex number &quot;3E7&quot; is equal to (3*256 + 14*16 + 7*1). Try
  entering:
</p>
<UL>
<PRE><TT>DECIMAL 12 HEX .&nbsp; \ print C
DECIMAL 12 256 *&nbsp;&nbsp; 7 16 * +&nbsp; 10 + .S
DUP BINARY .
HEX .</TT></PRE>
</UL>
<p>A variable called <B>BASE</B> is used to keep track of the current numeric
  base. The words <strong>HEX</strong> , <B>DECIMAL</B> , and <B>BINARY</B> work by changing
  this variable. You can change the base to anything you want. Try:
</p>
<UL>
<PRE><TT>7 BASE !
6 1 + .
BASE @ . \ surprise!</TT></PRE>
</UL>
<p>You are now in base 7 . When you fetched and printed the value of BASE,
  it said &quot;10&quot; because 7, in base 7, is &quot;10&quot;. </p>
<P>PForth defines a word called .HEX that prints a number as hexadecimal
regardless of the current base.
<UL>
<PRE>DECIMAL 14 .HEX</PRE>
</UL>
<p>You could define a word like .HEX for any base. What is needed is a way
  to temporarily set the base while a number is printed, then restore it
  when we are through. Try the following word: </p>
<UL>
<PRE><TT>: .BIN ( N -- , print N in Binary )
&nbsp;&nbsp;&nbsp; BASE @ ( save current base )
&nbsp;&nbsp;&nbsp; 2 BASE ! ( set to binary )
&nbsp;&nbsp;&nbsp; SWAP . ( print number )
&nbsp;&nbsp;&nbsp; BASE ! ( restore base )
;</TT></PRE>

<PRE><TT>DECIMAL
13 .BIN
13 .</TT></PRE>
</UL>

<H2>
<A NAME="Answers to Problems"></A>Answers to Problems</H2>
<p>If your answer doesn't exactly match these but it works, don't fret. In
  Forth, there are usually many ways to the same thing. </p>
<H3>
<A HREF="#Problems - Stack">Stack Manipulations</A></H3>

<UL>
<PRE><TT>1) SWAP DUP
2) ROT DROP
3) ROT DUP 3 PICK
4) SWAP OVER 3 PICK
5) -ROT 2DUP</TT></PRE>
</UL>

<H3>
<A HREF="#Problems - Square">Arithmetic</A></H3>

<UL>
<PRE>(12 * (20 - 17)) ==> <TT>20 17 - 12 *
</TT>(1 - (4 * (-18) / 6)) ==> <TT>1 4 -18 * 6 / -
</TT>(6 * 13) - (4 * 2 * 7) ==> <TT>6 13 * 4 2 * 7 * -</TT></PRE>

<PRE><TT>: SQUARE ( N -- N*N )&nbsp;
&nbsp;&nbsp;&nbsp; DUP *
;</TT></PRE>

<PRE><TT>: DIFF.SQUARES ( A B -- A*A-B*B )
	SWAP SQUARE&nbsp;
	SWAP SQUARE -&nbsp;
;</TT></PRE>

<PRE><TT>: AVERAGE4 ( A B C D -- [A+B+C+D]/4 )
&nbsp;&nbsp;&nbsp; + + + ( add'em up )
&nbsp;&nbsp;&nbsp; 4 /
;</TT></PRE>

<PRE><TT>
: HMS>SECONDS ( HOURS MINUTES SECONDS -- TOTAL-SECONDS )
&nbsp;&nbsp;&nbsp; -ROT SWAP ( -- seconds minutes hours )
&nbsp;&nbsp;&nbsp; 60 * + ( -- seconds total-minutes )
&nbsp;&nbsp;&nbsp; 60 * + ( -- seconds )
;
</TT></PRE>
</UL>

<H3>
<A HREF="#Problems - Logical">Logical Operators</A></H3>

<UL>
<PRE><TT>: LOWERCASE? ( CHAR -- FLAG , true if lowercase )
&nbsp;&nbsp;&nbsp; DUP 123 &lt;
&nbsp;&nbsp;&nbsp; SWAP 96 > AND
;</TT></PRE>
</UL>

<H3>
<A HREF="#Problems - Conditionals">Conditionals</A></H3>

<UL>
<PRE><TT>: DEDUCT ( n -- , subtract from account )
&nbsp;&nbsp;&nbsp; ACCOUNT @ ( -- n acc&nbsp;)
&nbsp;&nbsp;&nbsp; SWAP - DUP ACCOUNT ! ( -- acc' , update variable )
&nbsp;&nbsp;&nbsp; ." Balance = $" DUP . CR ( -- acc' )
&nbsp;&nbsp;&nbsp; 0&lt; ( are we broke? )
&nbsp;&nbsp;&nbsp; IF ." Warning!! Your account is overdrawn!" CR
&nbsp;&nbsp;&nbsp; THEN
;</TT></PRE>
</UL>

<H3>
<TT><A HREF="#Problems - Loops">Loops</A></TT></H3>

<UL>
<PRE><TT>: SUM.OF.N.1 ( N -- SUM[N] )
&nbsp;&nbsp;&nbsp; 0 SWAP \ starting value of SUM
&nbsp;&nbsp;&nbsp; 1+ 0 \ set indices for DO LOOP
&nbsp;&nbsp;&nbsp; ?DO \ safer than DO if N=0
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I +
&nbsp;&nbsp;&nbsp; LOOP
;</TT></PRE>

<PRE><TT>: SUM.OF.N.2 ( N -- SUM[N] )
&nbsp;&nbsp;&nbsp; 0 \ starting value of SUM
&nbsp;&nbsp;&nbsp; BEGIN ( -- N' SUM )
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OVER +
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SWAP 1- SWAP
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; OVER 0&lt;
&nbsp;&nbsp;&nbsp; UNTIL
&nbsp;&nbsp;&nbsp; SWAP DROP
;</TT></PRE>

<PRE><TT>: SUM.OF.N.3 ( NUM -- SUM[N] , Gauss' method )
&nbsp;&nbsp;&nbsp; DUP 1+&nbsp;&nbsp; \ SUM(N) = N*(N+1)/2
&nbsp;&nbsp;&nbsp; * 2/
;</TT></PRE>
</UL>
Back to <A HREF="../pforth">pForth Home Page</A>
<br class="clearfloat"/>
<!-- end content div ******************************** -->
</div>

<div id="footer">
  <p class="copyright">(C) 1997-2012 Mobileer Inc - All Rights Reserved - <a href="/contacts.php">Contact Us</a></p>
</div>
<!-- end container div ******************************** -->
</div>
<!-- Google analytics go here. -->
</body>
</html>
