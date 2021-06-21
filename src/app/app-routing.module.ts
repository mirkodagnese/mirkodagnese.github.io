import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProjectsComponent } from "./src/projects/projects.component";
import { AboutComponent } from "./src/about/about.component";
import { ContactComponent } from "./src/contact/contact.component";
import { ProjectDetailComponent } from "./src/project-detail/project-detail.component";
import {ThankYouComponent} from "./src/thank-you/thank-you.component";

const routes: Routes = [
  {
    path: '',
    component: ProjectsComponent
  },
  {
    path: 'projects',
    component: ProjectsComponent
  },
  {
    path: 'about',
    component: AboutComponent
  },
  {
    path: 'contact',
    component: ContactComponent
  },
  {
    path: 'project-detail',
    component: ProjectDetailComponent
  },
  {
    path: 'thank-you',
    component: ThankYouComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
