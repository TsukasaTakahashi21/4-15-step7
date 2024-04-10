<?php
  $examScoreList = [
    "国語" => 70,
    "算数" => 31,
    "理科" => 45,
    "社会" => 29,
    "英語" => 30,
  ];
  $resultList = [];

class ExamResultChecker {
  // 型 array を指定
  private array $examScoreList;
  private array $resultList;

  // 型 array を指定
  public function __construct(array $examScoreList) {
    $this->examScoreList = $examScoreList;
    $this->resultList = [];
  }

  public function checkResults() {
    foreach ($this->examScoreList as $subject => $score) {
      if ($score < 30) {
        $this->resultList[] = $subject. "は不合格"."\n";
        continue;
      }
        $this->resultList[] = $subject. "は合格"."\n";
    }
  }

  public function displayResults() {
    echo implode("\n", $this->resultList);
  }
}

  $examChecker = new ExamResultChecker($examScoreList);
  $examChecker->checkResults();
  $examChecker->displayResults();