export interface SidebarMenu {
    id: string
    name: string
    icon: string
    url?: string | undefined
    subMenu?: SidebarSubMenu[]
    permission: boolean
}
export interface SidebarSubMenu {
    name: string
    url: string
    permission: boolean
}
export interface Sidebar { }
