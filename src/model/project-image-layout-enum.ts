export enum ProjectImageLayoutEnum {
  FULLSCREEN = 0,
  TWO_COLUMNS = 1,
  RIGHT_DESCRIPTION = 2,
  BOTTOM_DESCRIPTION = 3,
  DESCRIPTION_ONLY = 4,
  LEFT_DESCRIPTION = 5
}

export namespace ProjectImageLayoutEnum {
  function fromInt(i: number): ProjectImageLayoutEnum {
    switch (i) {
      case 0:
        return ProjectImageLayoutEnum.FULLSCREEN;
      case 1:
        return ProjectImageLayoutEnum.TWO_COLUMNS;
      case 2:
        return ProjectImageLayoutEnum.RIGHT_DESCRIPTION;
      case 3:
        return ProjectImageLayoutEnum.BOTTOM_DESCRIPTION;
      case 4:
        return ProjectImageLayoutEnum.DESCRIPTION_ONLY;
      case 5:
        return ProjectImageLayoutEnum.LEFT_DESCRIPTION;
      default:
        return null;
    }
  }
}
