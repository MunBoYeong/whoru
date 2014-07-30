DROP DATABASE whoru;
CREATE DATABASE whoru;

USE whoru;

CREATE TABLE members (
    uid             INT NOT NULL AUTO_INCREMENT,    -- 사용자 식별자
    email           VARCHAR(255) NOT NULL UNIQUE,   -- 이메일
    passwd          CHAR(128) NOT NULL,             -- sha512(암호)
    name            VARCHAR(64) NOT NULL,           -- 이름
    nickname        VARCHAR(64) NOT NULL,           -- 닉네임
    dept            VARCHAR(80) NOT NULL,           -- 학과
    date_joined     DATETIME NOT NULL,              -- 가입한 날짜
    date_lastlogin  DATETIME NOT NULL,              -- 마지막 로그인한 날짜
    PRIMARY KEY(uid)
);

INSERT INTO members VALUES(1, 'admin', '60353746EE1E392870351E84568457F05930BE5C0530C031AD569A559B3D12877655F492415192D73EEB9780C19374ABF82654405022840BD1951433BA417425', '관리자', '관리자', '사이버해킹보안과', NOW(), NOW());