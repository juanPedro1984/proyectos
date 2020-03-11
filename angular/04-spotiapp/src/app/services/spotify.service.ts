import { Injectable } from '@angular/core';
import { HttpClient , HttpHeaders } from '@angular/common/http';

import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class SpotifyService {

  constructor(private http : HttpClient) {
      console.log("Servicio Spotify Listo");
   }

  getQuery ( query : string ){
    const url = `https://api.spotify.com/v1/${ query }`;

    const headers = new HttpHeaders({
      'Authorization':'Bearer BQBhG3u-MrVk0b9TY_HDne6a1i9ivUXeKYPwOKRSgH8wCf5qECxgnKNCOcNnuQsZ1gl8Nv796rixt1txyq0'
    });

    return this.http.get(url, {headers});
  }
  getNewReleases(){
      // const headers = new HttpHeaders({
      //   'Authorization':'Bearer BQBs_3CJmXmEJ0PhtB2Mmf66VEDac5Wwbi5AvQ9iDAw8Dtk5w-euDKE14CIbP1w20O2Ydqis7IZ5wTLi54E'
      // });
      //observable..
      return this.getQuery(`browse/new-releases`)
                .pipe( map ( data =>{
                  return data['albums'].items;
                } ) );

        // return this.http.get('	https://api.spotify.com/v1/browse/new-releases' , { headers })
        //     .pipe( map ( data =>{
        //       return data['albums'].items;
            // } ) );

  }

  getArtistas( termino : string ){
    // const headers = new HttpHeaders({
    //   'Authorization':'Bearer BQBs_3CJmXmEJ0PhtB2Mmf66VEDac5Wwbi5AvQ9iDAw8Dtk5w-euDKE14CIbP1w20O2Ydqis7IZ5wTLi54E'
    // });
    //
    //   return this.http.get(`https://api.spotify.com/v1/search?q=${ termino }&type=artist` , { headers })
    //       .pipe( map ( data =>{
    //         return data['artists'].items;
    //       } ) );
    return this.getQuery(`search?q=${ termino }&type=artist`)
            .pipe( map ( data =>{
            return data['artists'].items;
          } ) );
  }

  getArtista( id : string ){
    return this.getQuery(`artists/${id}`);
          //   .pipe( map ( data =>{
          //   return data['artists'].items;
          // } ) );
  }

  getTopTracks ( id : string ){
    return this.getQuery(`artists/${id}/top-tracks?country=us`);
          //   .pipe( map ( data =>{
          //   return data['artists'].items;
          // } ) );
  }
}
