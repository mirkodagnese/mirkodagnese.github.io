import data from '../assets/data.json';
import { ProjectImage } from "./project-image";

export class ProjectObject {

  name: string;
  title: string;
  shortDescription: string;
  description: string;
  thumbnail: string;
  hoverColor: string;
  images: ProjectImage[];

  constructor(name: string, title: string, shortDescription: string, description: string, thumbnail: string, hoverColor: string, images: ProjectImage[]) {
    this.name = name;
    this.title = title;
    this.shortDescription = shortDescription;
    this.description = description;
    this.thumbnail = thumbnail;
    this.hoverColor = hoverColor;
    this.images = images;
  }

  static getProjects(): ProjectObject[] {
    let projects: ProjectObject[] = [];
    data.forEach((prj: ProjectObject) => projects.push(prj));
    return projects;
  }

  static getProjectByName(name: string): ProjectObject {
    return data.filter((obj) => obj.name === name)[0];
  }

}
