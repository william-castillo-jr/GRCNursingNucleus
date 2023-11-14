DROP TABLE requirements;

CREATE TABLE IF NOT EXISTS requirements
(
    title text NOT NULL,
    OptionOneTitle varchar(255) DEFAULT NULL,
    OptionOnePointOne varchar(255) DEFAULT NULL,
    OptionOnePointTwo varchar(255) DEFAULT NULL,
    OptionOnePointThree varchar(255) DEFAULT NULL,
    OptionTwoTitle varchar(255) DEFAULT NULL,
    OptionTwoPointOne varchar(255) DEFAULT NULL,
    OptionTwoPointTwo varchar(255) DEFAULT NULL,
    OptionTwoPointThree varchar(255) DEFAULT NULL
    );

INSERT INTO requirements
(
    title,
    OptionOneTitle,
    OptionOnePointOne,
    OptionOnePointTwo,
    OptionOnePointThree,
    OptionTwoTitle,
    OptionTwoPointOne,
    OptionTwoPointTwo,
    OptionTwoPointThree
)

VALUES
    (
        'Tuberculosis Test -Expires Yearly',
        '2 Step',
        'Must be two separate 2-step PPD tests done initially done approximately 2 weeks apart',
        'Document must show induration in millimeter, date placed, and date read',
        'NULL',
        'QuantiFERON',
        'Results must be negative',
        'NULL',
        'NULL'
    ),
    (
        'Hepatitis B Titer',
        'Titer',
        'Only Anti-HBs or HepB SaB test are accepted',
        'NULL',
        'NULL',
        'Declination Form',
        'If currently in process of vaccine series or titer, or if non-converter',
        'NULL',
        'NULL'
    ),
    (
        'MMR Vaccine or Titer',
        '2 documented vaccine dates',
        'NULL',
        'NULL',
        'NULL',
        'Titer',
        'Separate titer needed for Measles, Mumps, and Rubella',
        'If result is negative/low/equivocal must get booster dose',
        'NULL'
    ),
    (
        'Varicella Vaccine or Titer -History of Chickenpox not accepted',
        '2 documented vaccine dates',
        'NULL',
        'NULL',
        'NULL',
        'Titer',
        'If result is negative/low/equivocal must get booster dose',
        'NULL',
        'NULL'
    ),
    (
        'Tdap Vaccine',
        'Date must be within last 10 years',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    ),
    (
        'Flu Vaccine-Expires Yearly',
        'Vaccine must be for current season (Sept thru August)',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    ),
    (
        'Covid 19 Vaccine Series',
        'Proof must include manufacturer',
        'Pfizer, Moderna, and Janssen are the only ones we accept currently',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    ),
    (
        'Covid Booster',
        'Proof must include manufacturer',
        'Only one dose required currently, but may change in the future',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    ),
    (
        'CPR Card',
        'Must be American Heart Association Basic Life Support',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    ),
    (
        'Professional Liability',
        'CANNOT attend lab or clinical prior to purchasing',
        'Expires end of each school year (08/31)',
        'Purchase at Cashier’s Office 253-833-9111 ext. 3399',
        'NULL',
        'NULL',
        'NULL',
        'NULL',
        'NULL'
    );


