<?php

/* AdminBundle:CtVisiteExtra:index.html.twig */
class __TwigTemplate_be5ba51f27fec6c442cb2a0fbcee2c67f917aa4f1108ce57926e25c18cee34b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisiteExtra:index.html.twig", 1);
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
        $__internal_f98a4ab4f81d3e7ac0257947b7bcc4befb91e93d5f0966aa117a82a86209a809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98a4ab4f81d3e7ac0257947b7bcc4befb91e93d5f0966aa117a82a86209a809->enter($__internal_f98a4ab4f81d3e7ac0257947b7bcc4befb91e93d5f0966aa117a82a86209a809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:index.html.twig"));

        $__internal_4f9fb2a7c12b7c7e4a2ff3fd501bda20e85ea5b4b114d8f858211aa28bc47eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9fb2a7c12b7c7e4a2ff3fd501bda20e85ea5b4b114d8f858211aa28bc47eb5->enter($__internal_4f9fb2a7c12b7c7e4a2ff3fd501bda20e85ea5b4b114d8f858211aa28bc47eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisiteExtra:index.html.twig"));

        // line 5
        $context["menu_visite_extra"] = true;
        // line 6
        $context["menu_visite_extra_type"] = true;
        // line 7
        $context["menu_visite_extra_type_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f98a4ab4f81d3e7ac0257947b7bcc4befb91e93d5f0966aa117a82a86209a809->leave($__internal_f98a4ab4f81d3e7ac0257947b7bcc4befb91e93d5f0966aa117a82a86209a809_prof);

        
        $__internal_4f9fb2a7c12b7c7e4a2ff3fd501bda20e85ea5b4b114d8f858211aa28bc47eb5->leave($__internal_4f9fb2a7c12b7c7e4a2ff3fd501bda20e85ea5b4b114d8f858211aa28bc47eb5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8996a4366eccc257d226161ec539d512b5edddd99ce187090a2934b08eaba407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8996a4366eccc257d226161ec539d512b5edddd99ce187090a2934b08eaba407->enter($__internal_8996a4366eccc257d226161ec539d512b5edddd99ce187090a2934b08eaba407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f9e55cc46c915366dafbe450a767ca01ae53bdaeb6b52f5bc86de9af7777d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9e55cc46c915366dafbe450a767ca01ae53bdaeb6b52f5bc86de9af7777d16->enter($__internal_1f9e55cc46c915366dafbe450a767ca01ae53bdaeb6b52f5bc86de9af7777d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des visite_extras ";
        
        $__internal_1f9e55cc46c915366dafbe450a767ca01ae53bdaeb6b52f5bc86de9af7777d16->leave($__internal_1f9e55cc46c915366dafbe450a767ca01ae53bdaeb6b52f5bc86de9af7777d16_prof);

        
        $__internal_8996a4366eccc257d226161ec539d512b5edddd99ce187090a2934b08eaba407->leave($__internal_8996a4366eccc257d226161ec539d512b5edddd99ce187090a2934b08eaba407_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af0b1bddf281c1f6dc30477138fc87a062de7d5904d41908bb933b8f9eca646e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af0b1bddf281c1f6dc30477138fc87a062de7d5904d41908bb933b8f9eca646e->enter($__internal_af0b1bddf281c1f6dc30477138fc87a062de7d5904d41908bb933b8f9eca646e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f19fb25038e834a65e4d21d87fa0bcde259b7931c892d8109529753d73426206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19fb25038e834a65e4d21d87fa0bcde259b7931c892d8109529753d73426206->enter($__internal_f19fb25038e834a65e4d21d87fa0bcde259b7931c892d8109529753d73426206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une visite extra
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visite_extras"] ?? $this->getContext($context, "visite_extras")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite_extra"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite_extra"], "vsteLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_edit", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_extra_delete", array("id" => $this->getAttribute($context["visite_extra"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite_extra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_f19fb25038e834a65e4d21d87fa0bcde259b7931c892d8109529753d73426206->leave($__internal_f19fb25038e834a65e4d21d87fa0bcde259b7931c892d8109529753d73426206_prof);

        
        $__internal_af0b1bddf281c1f6dc30477138fc87a062de7d5904d41908bb933b8f9eca646e->leave($__internal_af0b1bddf281c1f6dc30477138fc87a062de7d5904d41908bb933b8f9eca646e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1865ea5f3fe10f582355b6e1df3908bbc48a7419f728ecb2513b3c2c67ef761b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1865ea5f3fe10f582355b6e1df3908bbc48a7419f728ecb2513b3c2c67ef761b->enter($__internal_1865ea5f3fe10f582355b6e1df3908bbc48a7419f728ecb2513b3c2c67ef761b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0059463baebd04f1bfb1b7342f62afb5902b664241b6f71e73d700dca83aff0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0059463baebd04f1bfb1b7342f62afb5902b664241b6f71e73d700dca83aff0f->enter($__internal_0059463baebd04f1bfb1b7342f62afb5902b664241b6f71e73d700dca83aff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-visite_extra').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_0059463baebd04f1bfb1b7342f62afb5902b664241b6f71e73d700dca83aff0f->leave($__internal_0059463baebd04f1bfb1b7342f62afb5902b664241b6f71e73d700dca83aff0f_prof);

        
        $__internal_1865ea5f3fe10f582355b6e1df3908bbc48a7419f728ecb2513b3c2c67ef761b->leave($__internal_1865ea5f3fe10f582355b6e1df3908bbc48a7419f728ecb2513b3c2c67ef761b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisiteExtra:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des visite_extras {% endblock %}

{% set menu_visite_extra           = true %}
{% set menu_visite_extra_type      = true %}
{% set menu_visite_extra_type_list = true %}

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
                    <a href=\"{{ path('visite_extra_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une visite extra
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('visite_extra_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite_extra\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nom</th>
                                    <th>Libelle</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for visite_extra in visite_extras %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ visite_extra.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ visite_extra.vsteLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('visite_extra_edit', { 'id': visite_extra.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('visite_extra_delete', { 'id': visite_extra.id }) }}\">
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
            \$('#list-visite_extra').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune visite extra trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtVisiteExtra:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisiteExtra/index.html.twig");
    }
}
