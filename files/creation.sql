create table transverse.axe
(
    axe_id   int auto_increment
        primary key,
    axe_name varchar(255) not null
);

create table transverse.axe_category
(
    category_id   int auto_increment
        primary key,
    category_name varchar(255) not null,
    id_axe        int          null,
    constraint axe_category_axe_axe_id_fk
        foreign key (id_axe) references transverse.axe (axe_id)
);

create table transverse.axe_category_question
(
    question_id     int auto_increment
        primary key,
    question_name   text null,
    id_axe_category int  not null,
    constraint axe_category_question_axe_category_category_id_fk
        foreign key (id_axe_category) references transverse.axe_category (category_id)
);

create table transverse.axe_category_question_answer
(
    answer_id                int auto_increment
        primary key,
    answer_name              text null,
    answer_point             int  not null,
    id_axe_category_question int  not null,
    constraint question_answer_axe_category_question_question_id_fk
        foreign key (id_axe_category_question) references transverse.axe_category_question (question_id)
);

create table transverse.grid
(
    grid_id      int auto_increment
        primary key,
    grid_name    varchar(255)         not null,
    grid_deleted tinyint(1) default 0 not null
);

create table transverse.grid_question_answer
(
    grid_question_answer_id         int auto_increment
        primary key,
    id_grid                         int not null,
    id_axe_category_question_answer int not null,
    constraint grid_question_answer_grid_grid_id_fk
        foreign key (id_grid) references transverse.grid (grid_id),
    constraint question_answer_grid_id_answer_id_fk
        foreign key (id_axe_category_question_answer) references transverse.axe_category_question_answer (answer_id)
);

