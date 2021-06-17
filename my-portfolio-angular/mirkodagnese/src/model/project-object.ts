export class ProjectObject {

  name: string;
  title: string;
  shortDescription: string;
  description: string;
  thumbnail: string;
  hoverColor: string;
  images: string[];

  constructor(name: string, title: string, shortDescription: string, description: string, thumbnail: string, hoverColor: string, images: string[]) {
    this.name = name;
    this.title = title;
    this.shortDescription = shortDescription;
    this.description = description;
    this.thumbnail = thumbnail;
    this.hoverColor = hoverColor;
    this.images = images;
  }

}
