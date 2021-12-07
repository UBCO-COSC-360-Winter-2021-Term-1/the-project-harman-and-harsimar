SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `posts` (
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255),
  `id` INTEGER NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('lnsewn12', 'I refused to cook today, it’s been glorious.', 'On Monday I announced I would not be cooking today. Sent my husband in a panic. He realized he’d have to shop, prep, pull it off on his own. He called his mom to help.

I got up an did normal chores like making the bed and unloaded the dishwasher so he’s have plenty of space, but I haven’t cooked anything and will not participate.

I just made my second cocktail of the day (Pomegranate French 75) and am sketching on the back porch.', '0');

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('Phenom981', 'Which celebrity do you suspect is pure evil in private?', 'I think... Dr. Phil for sure. There was an episode in the early 2000s featuring the mother of a missing girl named Natalee Holloway. They claimed to have confessions from the killers on tape. He showed that poor mother a completely edited conversation with the suspected murders that made it seem like a true confession. Later on they were called out on straight up lying and editing the tape. Not to mention all those countless teenagers he’s sent to outdoor rehabilitation bullshit. The horror stories that have come out of those rehabs is disgusting. He doesn’t care about these people at all, they’re profit to him.', '1');

INSERT INTO
  `posts` (`username`, `title`, `description`, `id`)
VALUES
  (
    "Queltis6000",
    "Who' '&#039;' s next in line for your team '&#039;' s captaincy ? " , " The Toronto situation got me thinking about it,
    since it '&#039;' s pretty clear Matthews is being groomed under Tavares.But if your captain retired or was traded today, who would fill that role?", "2");

INSERT INTO `posts` (`username`, `title`, `id`) VALUES
('Gisgiii', 'What is a subtle sign that someone is really intelligent?', '3');

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('Doctor_Disaster', 'What is something that you have purchased in the past, but have never used once since then?', 'Just curious', '4');

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('InternationalBedroom', 'I have an announcement to make ya‘ll', 'Can I just say ya‘ll hech other with the respect and dignity of the 24/7 title and letting all the confused and misled little Jimmies know that conspiracies are not what’s up.', '5');

INSERT INTO
  `posts` (`username`, `title`, `description`, `id`)
VALUES
  (
    'Towel_of_Babel',
    'Survival of the fittest ',
    "It is well known that Herbert Spencer, five years after the publication of Darwin' & #039;'s 'Origin of Species,' introduced the phrase 'survival of the fittest' as an exact equivalent of 'natural selection.' He said:
    The survival of the fittest which I have here sought to express in mechanical terms is that which Mr Davis has called 'natural selection,'
    or the preservation of favoured races in the struggle for life.
    And yet,
    philosophers of that time could not determine the criteria of being the 'fittest'.Some interpretations believe it to be one of the biggest
    and strongest,
    yet in the Book of Samuel,
    the shepherd David was able to topple the philistine Goliath.This bring us to 21 November 2021,
    where
      R - Truth will take part in a dual brand battle royal in order to emulate his childhood hero The Rock.Superstars of many sizes
      and varying levels of intellect
      and guile will all be in the same ring at the same time.This will be a true test of 'survival of the fittest'",
    ' 6 '
  );

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('Relative_Ad', 'Rumors', 'Be careful of what you hear… Not everything you see and hear is real… or factual… unless you’ve met the person or experienced a certain situation for yourself… Stay quiet… Help the meek, weak, and defensive-less, you’d be surprised what kind of blessing comes your way.

(Note: No offense to anyone who believes in something different or has a different religion.)', '7');

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('Cane_Dewey', 'PEOPLE OVER THERE', 'WHATS UP?', '8');

INSERT INTO `posts` (`username`, `title`, `description`, `id`) VALUES
('naysaw', 'What’s the dumbest scene in any of the Star Wars movies?', 'SERIOUS', '9');

ALTER TABLE `posts`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

  
CREATE TABLE `comments` (
   `username` varchar(255),
  `comment` varchar(255),
  `id` INTEGER NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('20Keller12', 'My MIL was apparently upset with her mom (GMIL) that she was not cooking Thanksgiving dinner this year for everyone, apparently GMIL basically
 said Im 81, I have done plenty of Thanksgiving dinners, so if you want it then you host it and I love her for it.', '0');

 INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('HingleMcCringleberre2', ' We have got teenage kids now. A week beforehand we talk about what we want to cook/eat and everyone makes 1-3 dishes. We all cook and generally goof off together.

Everybody has got to figure out what works for them and their family, I think.', '0');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Greenleafz', ' I do not get the mentality that only one person has to cook an entire fucking feast for everyone. I always participate in the kitchen with my partner. That is how Thanksgiving should be.', '0');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('LivingWilling', ' I honestly do not think that one person should have to cook all the time. In a relationship, I do not see why both parties cannot just switch off with each other.
', '0');


INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Ehzabeth', ' Mario Lopez. He is all love and light on Instagram but he is a sneaky, selfish, manipulative person that consistently treats the crew around him like trash.
 Unfortunately I do not suspect this, I have seen it first hand. I am constantly surprised when I meet people that think there is anything nice about him.
  He is a slimeball.', '1');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('chefboyaredeee', 'Joel Osteen', '1');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('damo190', 'Dan get in the van Schneider', '1');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('UnawareMarmoset', 'Michelle Duggar', '1');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Redwings1023', 'I do not think there is a apparent heir at the moment. I would say Seider is a leader type but.. it is his rookie season', '2');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('butchthedoggy', 'I Do not think we have drafted him yet', '2');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Khue', 'Something happens to Stamkos? It immediately goes to Hedman. Long term? Probably Pointer.', '2');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Puzzlehead-Engineer', 'They draw wisdom from multiple sources. Wait but that might be more wise than intelligent... But I guess those two tend to be seen 
together a lot.', '3');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Wynonna99', 'They can switch up the way they talk to match the person they arere talking to without sounding condescending. They listen to how 
others learn and explain it in that persons language of understanding', '3');


INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('Yoodei_Mon', 'Talking to people as if they are intelligent at their level and without being condescending or even letting on that it is lower than their level.'
, '3');


INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('foyeldagain', 'A gate to put at the top of stairs to keep kids from falling down them. '
, '4');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('b5jeff', 'I can get with that'
, '5');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('cornette', 'Dance break!'
, '5');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('xeqtr_inc', 'Dang! Can someone get space x starlink as backup?'
, '6');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('bondmemebond_2', 'Frogs: Why do my eggs look like eyeballs'
, '6');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('hsumyatnoe21', 'the time i am glad i was wrong'
, '7');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('thekingminn', 'its 12:59 so goodbye'
, '7');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('grace', 'im okay!!! but tired'
, '8');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('henny', 'im stressed and cant sleep'
, '8');


INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('jeanette', 'im good!'
, '8');


INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('HanjiZoe03', 'I can tell which Trilogy people dislike the most by just reading the comments lol'
, '9');

INSERT INTO `comments` (`username`,`comment`, `id`) VALUES
('LenniGengar', 'A good question... For another time. That, and Finn wanting to tell Rey something in the quicksand'
, '9');

CREATE TABLE users(
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `usertype` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

 













