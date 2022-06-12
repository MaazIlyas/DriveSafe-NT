/* THE FOLLOWING TEST Statements will not run and give error */

/* users table Data */
-- Note: This data will give error as it is leaving the NOT NUll field NULL.
INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `salt`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(51, NULL, 'Phan', 'Alex', 'alexphans@gmail.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'admin', NULL, NULL, NULL),
(52, 'Maaz', NULL, 'Maaz', 'maazilyass@gmail.com', NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'admin', NULL, NULL, NULL),
(53, 'Marker', 'DDWA', 'marker', NULL, NULL, '$2y$10$DPjgDOT87DDVGSyOpUUycuJJy1MXa/ZPCHV8vXD8sBZGLAGUcGgou', 'ZYDku9udNt3es1ro', 'student', NULL, NULL, NULL);


/* schools table Data */
-- Note: This data will give error as it is trying to store the same id again which is primary key.
INSERT INTO `schools` (`id`, `name`, `street_address`, `city`, `state`, `post_code`, `created_at`, `updated_at`) VALUES
(15, 'School ABC', '1 Witherden st', 'Alice Springs', 'NT', '0800', '2022-06-11 21:57:52', '2022-06-11 21:57:52'),
(15, 'School JKL', '2 River st', 'Darwin', 'NT', '0820', '2022-06-11 21:57:52', '2022-06-11 21:57:52'); -- Error here

/* instructors table Data */
-- Note: this will give error as it is trying to store the same license number TWICE WHICH IS UNIQUE
INSERT INTO `instructors` (`id`, `first_name`, `last_name`, `license_no`, `exp_in_years`, `contact_num`, `car_type`, `language`, `bio`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Maaz', 'Ilyas', 'AB100000', '8', '89723353', 'Automatic, Manual', 'English, Urdu, Japanese', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 1, '2022-06-11 21:57:52', '2022-06-11 23:04:28'),
(2, 'Alex', 'Phan', 'AB100000', '5', '1233245', 'Manual', 'English, Mexican', 'Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Vestibulum viverra urna non turpis ullamcorper, sed varius ligula pretium.  Donec a orci in urna convallis sagittis a eu ex. Vivamus pellentesque nisl at dignissim mollis.  Suspendisse sed nisl neque. Phasellus vitae bibendum neque. Vestibulum ligula sapien, tristique  rutrum urna pharetra, efficitur facilisis ante.', 2, '2022-06-11 21:57:52', '2022-06-11 23:07:04');