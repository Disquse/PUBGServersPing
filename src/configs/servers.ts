
export enum ServerRegions {
  'America' = 0,
  'Europe',
  'Asia',
  'Russia',
}

export interface IServerData {
  id?: string;
  name: string;
  region: ServerRegions;
  endpoint: string;
}

export const servers: IServerData[] = [
  {
    name: 'US-East (Virginia)',
    id: 'us-east-1',
    region: 0,
    endpoint: 'http://dynamodb.us-east-1.amazonaws.com',
  },
  {
    name: 'US East (Ohio)',
    id: 'us-east-2',
    region: 0,
    endpoint: 'http://dynamodb.us-east-2.amazonaws.com',
  },
  {
    name: 'US-West (California)',
    id: 'us-west-1',
    region: 0,
    endpoint: 'http://dynamodb.us-west-1.amazonaws.com',
  },
  {
    name: 'US-West (Oregon)',
    id: 'us-west-2',
    region: 0,
    endpoint: 'http://dynamodb.us-west-2.amazonaws.com',
  },
  {
    name: 'Canada (Central)',
    id: 'ca-central-1',
    region: 0,
    endpoint: 'http://dynamodb.ca-central-1.amazonaws.com',
  },
  {
    name: 'South America (Sao Paulo)',
    id: 'sa-east-1',
    region: 0,
    endpoint: 'http://azspdbrazilsouth.blob.core.windows.net',
  },
  {
    name: 'Europe (Ireland)',
    id: 'eu-west-1',
    region: 1,
    endpoint: 'http://dynamodb.eu-west-1.amazonaws.com',
  },
  {
    name: 'Europe (London)',
    id: 'eu-west-2',
    region: 1,
    endpoint: 'http://dynamodb.eu-west-2.amazonaws.com',
  },
  {
    name: 'Europe (Frankfurt)',
    id: 'eu-central-1',
    region: 1,
    endpoint: 'http://dynamodb.eu-central-1.amazonaws.com',
  },
  {
    name: 'Asia (Mumbai)',
    id: 'ap-south-1',
    region: 2,
    endpoint: 'http://dynamodb.ap-south-1.amazonaws.com',
  },
  {
    name: 'Asia (Japan)',
    id: 'ap-northeast-1',
    region: 2,
    endpoint: 'http://azspdjapanwest.blob.core.windows.net',
  },
  {
    name: 'Asia (Seoul)',
    id: 'ap-northeast-2',
    region: 2,
    endpoint: 'http://dynamodb.ap-northeast-2.amazonaws.com',
  },
  {
    name: 'Asia (Singapore)',
    id: 'ap-southeast-1',
    region: 2,
    endpoint: 'http://dynamodb.ap-southeast-2.amazonaws.com',
  },
  {
    name: 'Asia (Sydney)',
    id: 'ap-southeast-2',
    region: 2,
    endpoint: 'http://dynamodb.ap-southeast-2.amazonaws.com',
  },
  {
    name: 'Asia (Korea)',
    id: 'ap-southeast-2',
    region: 2,
    endpoint: 'http://azspdkoreacentral.blob.core.windows.net',
  },
  {
    name: 'Russia (Moscow)',
    id: 'ru-west-1',
    region: 3,
    endpoint: 'https://ip.mail.ru',
  },
  {
    name: 'South Australia',
    id: 'oc-south-1',
    region: 4,
    endpoint: 'http://azspdaustraliasoutheast.blob.core.windows.net',
  },
  {
    name: 'East Australia',
    id: 'oc-east-2',
    region: 4,
    endpoint: 'http://azspdaustraliaeast.blob.core.windows.net',
  },
];
