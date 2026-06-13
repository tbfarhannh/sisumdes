import Alpine from 'alpinejs';
import { createIcons, Menu, X, ChevronDown, User, Mail, Phone, MapPin, ArrowRight, CheckCircle, Users, Home, FileText, Megaphone, Plus, AlertTriangle } from 'lucide';

window.Alpine = Alpine;
Alpine.start();

// Inisialisasi Lucide icons setelah halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    createIcons({
        icons: { Menu, X, ChevronDown, User, Mail, Phone, MapPin, ArrowRight, CheckCircle, Users, Home, FileText, Megaphone, Plus, AlertTriangle }
    });
});