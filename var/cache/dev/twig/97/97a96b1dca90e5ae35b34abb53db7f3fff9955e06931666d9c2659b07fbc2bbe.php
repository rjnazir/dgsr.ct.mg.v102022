<?php

/* AdminBundle:CtProvince:index.html.twig */
class __TwigTemplate_54b6702365942b5b498ed47afb20b0ce41bd39108d626cd04c34e90f92325a5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProvince:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe09c30dab7326040635d1f0899f7d5dff4acb1808911c0168e7013f89609168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe09c30dab7326040635d1f0899f7d5dff4acb1808911c0168e7013f89609168->enter($__internal_fe09c30dab7326040635d1f0899f7d5dff4acb1808911c0168e7013f89609168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:index.html.twig"));

        $__internal_25021a651784488b6b9d9909af380a8a5e9df98191768c7f28cfbf5aae1fefec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25021a651784488b6b9d9909af380a8a5e9df98191768c7f28cfbf5aae1fefec->enter($__internal_25021a651784488b6b9d9909af380a8a5e9df98191768c7f28cfbf5aae1fefec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProvince:index.html.twig"));

        // line 5
        $context["menu_province"] = true;
        // line 6
        $context["menu_province_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe09c30dab7326040635d1f0899f7d5dff4acb1808911c0168e7013f89609168->leave($__internal_fe09c30dab7326040635d1f0899f7d5dff4acb1808911c0168e7013f89609168_prof);

        
        $__internal_25021a651784488b6b9d9909af380a8a5e9df98191768c7f28cfbf5aae1fefec->leave($__internal_25021a651784488b6b9d9909af380a8a5e9df98191768c7f28cfbf5aae1fefec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_887eb56db8e0f9e412d74735b4a257fa976a3507043c47c41e4592c28e36d84a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_887eb56db8e0f9e412d74735b4a257fa976a3507043c47c41e4592c28e36d84a->enter($__internal_887eb56db8e0f9e412d74735b4a257fa976a3507043c47c41e4592c28e36d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bbf8f0b1ce4e54b14e947e9559ac21eb81dfce13b1fe4e700606b00af78db3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf8f0b1ce4e54b14e947e9559ac21eb81dfce13b1fe4e700606b00af78db3fb->enter($__internal_bbf8f0b1ce4e54b14e947e9559ac21eb81dfce13b1fe4e700606b00af78db3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des provinces ";
        
        $__internal_bbf8f0b1ce4e54b14e947e9559ac21eb81dfce13b1fe4e700606b00af78db3fb->leave($__internal_bbf8f0b1ce4e54b14e947e9559ac21eb81dfce13b1fe4e700606b00af78db3fb_prof);

        
        $__internal_887eb56db8e0f9e412d74735b4a257fa976a3507043c47c41e4592c28e36d84a->leave($__internal_887eb56db8e0f9e412d74735b4a257fa976a3507043c47c41e4592c28e36d84a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_603238f0dffad06c88560fb694a1acca80a120d19b1c56444f862b5c73f31ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603238f0dffad06c88560fb694a1acca80a120d19b1c56444f862b5c73f31ad2->enter($__internal_603238f0dffad06c88560fb694a1acca80a120d19b1c56444f862b5c73f31ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e47e7467b3498f7efcf3293fbb51e59dc3f7ceafe71158c865838349370656b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e47e7467b3498f7efcf3293fbb51e59dc3f7ceafe71158c865838349370656b->enter($__internal_1e47e7467b3498f7efcf3293fbb51e59dc3f7ceafe71158c865838349370656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["provinces"] ?? $this->getContext($context, "provinces")));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvNom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["province"], "prvCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_edit", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("province_delete", array("id" => $this->getAttribute($context["province"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                            </tbody>
                        </table>

                        ";
        // line 80
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_1e47e7467b3498f7efcf3293fbb51e59dc3f7ceafe71158c865838349370656b->leave($__internal_1e47e7467b3498f7efcf3293fbb51e59dc3f7ceafe71158c865838349370656b_prof);

        
        $__internal_603238f0dffad06c88560fb694a1acca80a120d19b1c56444f862b5c73f31ad2->leave($__internal_603238f0dffad06c88560fb694a1acca80a120d19b1c56444f862b5c73f31ad2_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c42b73abe26f236f4e626bf6467321f5e993518c2550ac066c30fffdf098ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c42b73abe26f236f4e626bf6467321f5e993518c2550ac066c30fffdf098ad0->enter($__internal_1c42b73abe26f236f4e626bf6467321f5e993518c2550ac066c30fffdf098ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a10a2b66d4fae204813c5bd71ab6ac05ae300d033ebe250833033f0a8b520dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a10a2b66d4fae204813c5bd71ab6ac05ae300d033ebe250833033f0a8b520dc->enter($__internal_6a10a2b66d4fae204813c5bd71ab6ac05ae300d033ebe250833033f0a8b520dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-province').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6a10a2b66d4fae204813c5bd71ab6ac05ae300d033ebe250833033f0a8b520dc->leave($__internal_6a10a2b66d4fae204813c5bd71ab6ac05ae300d033ebe250833033f0a8b520dc_prof);

        
        $__internal_1c42b73abe26f236f4e626bf6467321f5e993518c2550ac066c30fffdf098ad0->leave($__internal_1c42b73abe26f236f4e626bf6467321f5e993518c2550ac066c30fffdf098ad0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProvince:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  239 => 93,  218 => 80,  213 => 76,  201 => 70,  194 => 66,  188 => 63,  184 => 62,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des provinces {% endblock %}

{% set menu_province      = true %}
{% set menu_province_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('province_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un province
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('province_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-province\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Code</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for province in provinces %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ province.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ province.prvNom }}</td>
                                        <td>{{ province.prvCode }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('province_edit', { 'id': province.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('province_delete', { 'id': province.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-province').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune province trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtProvince:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProvince/index.html.twig");
    }
}
