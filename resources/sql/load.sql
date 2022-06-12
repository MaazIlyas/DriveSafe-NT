/* Queries to load test the database tables */

/* users table Data */
-- Note: This data will only work once as it contains email and username which has UNIQUE Index on it.
INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `salt`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alex', 'Phan', 'Alex', 'alexphan@gmail.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'admin', NULL, NULL, NULL),
(2, 'Maaz', 'Ilyas', 'Maaz', 'maazilyas@gmail.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'admin', NULL, NULL, NULL),
(3, 'Marker', 'DDWA', 'marker', 'marker@cdu.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'student', NULL, NULL, NULL);

/* ------------------------------------------|Testing auto increment|------------------------------------------ */
INSERT INTO `users` (`first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `salt`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
('Test', 'User1', 'testuser1', 'testuser1@email.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'admin', NULL, '2022-06-12 08:54:55', '2022-06-12 08:54:55'),
('Test', 'User2', 'testuser2', 'testuser2@email.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'student', NULL, '2022-06-12 08:54:55', '2022-06-12 08:54:55'),
('Test', 'User3', 'testuser3', 'testuser3@email.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'student', NULL, '2022-06-12 08:54:55', '2022-06-12 08:54:55');
/* ---------------------------------------------------------------------------------------------------------- */

/* schools table Data */
INSERT INTO `schools` (`id`, `name`, `street_address`, `city`, `state`, `post_code`, `created_at`, `updated_at`) VALUES
(1, 'School ABC', '1 Witherden st', 'Alice Springs', 'NT', '0800', '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
(2, 'School JKL', '2 River st', 'Darwin', 'NT', '0820', '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
(3, 'School UVW', '8 Smiths st', 'Big Rivers', 'NT', '0830', '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
(4, 'School XYZ', '9 Werder st', 'Palmerston', 'NT', '0840', '2022-06-11 21:57:52', '2022-06-11 21:57:52');

/* ------------------------------------------|Testing auto increment|------------------------------------------ */
INSERT INTO `schools` (`name`, `street_address`, `city`, `state`, `post_code`, `created_at`, `updated_at`) VALUES
('School ABC', '1 Witherden st', 'Alice Springs', 'NT', '0800', '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
('School JKL', '2 River st', 'Darwin', 'NT', '0820', '2022-06-11 21:57:52', '2022-06-11 21:57:52');
/* ------------------------------------------------------------------------------------------------------------ */

/* instructors table Data */
INSERT INTO `instructors` (`id`, `first_name`, `last_name`, `license_no`, `exp_in_years`, `contact_num`, `car_type`, `language`, `bio`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Maaz', 'Ilyas', 'AB152564', '8', '89723353', 'Automatic, Manual', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 1, '2022-06-11 21:57:52', '2022-06-11 23:04:28'),
(2, 'Alex', 'Phan', 'AB232564', '5', '1233245', 'Manual', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 2, '2022-06-11 21:57:52', '2022-06-11 23:07:04'),
(3, 'Jamal', 'Chohan', 'AB152512', '2', '412452342', 'Automatic', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 3, '2022-06-11 21:57:52', '2022-06-11 23:10:30'),
(4, 'Nick', 'Jonas', 'AB1522132', '6', '123125123', 'Automatic', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 4, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
(5, 'Aliza', 'Sheikh', 'AB2323564', '2', '242353', 'Automatic, Manual', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 1, '2022-06-11 21:57:52', '2022-06-11 21:57:52');
-- (6, 'Jamala', 'Chohana', 'AB153412', '12', '123452345', 'Automatic', 'English, Urdu, Chinese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 2, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (7, 'Niko', 'Junasa', 'AB15234232', '6', '123423423', 'Automatic, Manual', 'English, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 4, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (8, 'Anika', 'George', 'AB232664', '19', '632342245', 'Automatic', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 3, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (9, 'Luis', 'Silvia', 'AB1523212', '20', '4124523342', 'Automatic, Manual', 'English', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 1, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (10, 'Sami', 'Azam', 'AB152922', '22', '123125343', 'Automatic', 'English, Bengali, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 2, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (11, 'Alex', 'George', 'AB3232664', '19', '632342245', 'Automatic', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 3, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (12, 'Siri', 'David', 'AB15234212', '22', '41243141342', 'Automatic, Manual', 'English', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 4, '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
-- (13, 'Sami', 'Azam', 'AB1529032', '23', '123125343', 'Automatic', 'English, Bengali, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 3, '2022-06-11 21:57:52', '2022-06-11 21:57:52');

/* ------------------------------------------|Testing auto increment|------------------------------------------ */
INSERT INTO `instructors` (`first_name`, `last_name`, `license_no`, `exp_in_years`, `contact_num`, `car_type`, `language`, `bio`, `school_id`, `created_at`, `updated_at`) VALUES
('Test', 'Instructor1', 'AB153454', '8', '89723353', 'Automatic, Manual', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 1, '2022-06-11 21:57:52', '2022-06-11 23:04:28'),
('Test', 'Instructor2', 'AB232242', '5', '1233245', 'Manual', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 2, '2022-06-11 21:57:52', '2022-06-11 23:07:04'),
('Test', 'Instructor3', 'AB154234', '2', '412452342', 'Automatic', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 3, '2022-06-11 21:57:52', '2022-06-11 23:10:30');
/* ------------------------------------------------------------------------------------------------------------ */


/* reviews table Data */
INSERT INTO `reviews` (`id`, `rating`, `review`, `user_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
(1, '5', 'Superb Instructor!', 1, 1, '2022-06-10 00:22:29', '2022-06-10 00:22:29'),
(2, '3', 'Moderate Instructor.', 2, 1, '2022-06-10 00:23:27', '2022-06-10 00:23:27'),
(3, '3', 'Cute instructor', 1, 2, '2022-06-11 23:52:02', '2022-06-11 23:52:02'),
(4, '4', 'Stylish instructor', 2, 2, '2022-06-11 23:52:36', '2022-06-11 23:52:36');

/* ------------------------------------------|Testing auto increment|------------------------------------------ */
INSERT INTO `reviews` (`rating`, `review`, `user_id`, `instructor_id`, `created_at`, `updated_at`) VALUES
('4', 'Lovely instructor', 2, 3, '2022-06-11 23:53:11', '2022-06-11 23:53:11'),
('5', 'Thanks', 1, 3, '2022-06-11 23:53:43', '2022-06-11 23:53:43'),
('2', 'Bad', 2, 4, '2022-06-11 23:55:48', '2022-06-11 23:55:56');
/* ------------------------------------------------------------------------------------------------------------ */
