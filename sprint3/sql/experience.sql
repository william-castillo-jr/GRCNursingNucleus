DROP TABLE IF EXISTS experience;

CREATE TABLE IF NOT EXISTS experience
(
    What_clinical_site_did_you_attend text NOT NULL,
    I_enjoyed_my_time_at_this_clinic int(11) NOT NULL,
    The_clinical_staff_was_supportive_of_my_role int(11) NOT NULL,
    The_site_helped_facilitate_my_learning_objective int(11) NOT NULL,
    The_preceptor_helped_facilitate_my_learning_objectives int(11) NOT NULL,
    I_would_recommend_this_site_to_another_student int(11) NOT NULL,
    Comments text DEFAULT NULL,
    Feedback text DEFAULT NULL
    );

INSERT INTO experience
(
    What_clinical_site_did_you_attend,
    I_enjoyed_my_time_at_this_clinic,
    The_clinical_staff_was_supportive_of_my_role,
    The_site_helped_facilitate_my_learning_objective,
    The_preceptor_helped_facilitate_my_learning_objectives,
    I_would_recommend_this_site_to_another_student,
    Comments,
    Feedback
)
VALUES
    ('The Auburn Clinic', 1, 2, 3, 4, 5, 'Staff was very supportive', 'more material could be done online');