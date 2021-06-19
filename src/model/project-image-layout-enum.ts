export enum ProjectImageLayoutEnum {
  FULLSCREEN = 0,
  TWO_COLUMNS = 1,
  RIGHT_DESCRIPTION = 2,
  BOTTOM_DESCRIPTION = 3,
  DESCRIPTION_ONLY = 4
}

export namespace ProjectImageLayoutEnum {
  function fromInt(i: number): ProjectImageLayoutEnum {
    switch (i) {
      case 0:
        return ProjectImageLayoutEnum.FULLSCREEN;
      case 1:
        return ProjectImageLayoutEnum.FULLSCREEN;
      case 2:
        return ProjectImageLayoutEnum.FULLSCREEN;
      case 3:
        return ProjectImageLayoutEnum.FULLSCREEN;
      case 4:
        return ProjectImageLayoutEnum.FULLSCREEN;
      default:
        return null;
    }
  }
}
