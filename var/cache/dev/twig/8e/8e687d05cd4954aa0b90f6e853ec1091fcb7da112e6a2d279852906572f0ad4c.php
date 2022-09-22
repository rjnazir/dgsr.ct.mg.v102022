<?php

/* @Admin/CtRole/index.html.twig */
class __TwigTemplate_515e9f030699ae6087f73b4ce2c69b37e6090818efde0b5976f38a6673031659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtRole/index.html.twig", 1);
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
        $__internal_0991a39f134ddeeb3195a2ee539b9c7c465a9af39274612ccc5572a37f8ffb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0991a39f134ddeeb3195a2ee539b9c7c465a9af39274612ccc5572a37f8ffb63->enter($__internal_0991a39f134ddeeb3195a2ee539b9c7c465a9af39274612ccc5572a37f8ffb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/index.html.twig"));

        $__internal_6be0238c2144c02177451d508a750ca372a03b495db1519ffa34fab97e5428e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be0238c2144c02177451d508a750ca372a03b495db1519ffa34fab97e5428e9->enter($__internal_6be0238c2144c02177451d508a750ca372a03b495db1519ffa34fab97e5428e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtRole/index.html.twig"));

        // line 5
        $context["menu_role"] = true;
        // line 6
        $context["menu_role_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0991a39f134ddeeb3195a2ee539b9c7c465a9af39274612ccc5572a37f8ffb63->leave($__internal_0991a39f134ddeeb3195a2ee539b9c7c465a9af39274612ccc5572a37f8ffb63_prof);

        
        $__internal_6be0238c2144c02177451d508a750ca372a03b495db1519ffa34fab97e5428e9->leave($__internal_6be0238c2144c02177451d508a750ca372a03b495db1519ffa34fab97e5428e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e4ab28d3e09ba4bfa7aafe2290a0e4e7cea2778ec54d2e731619f0f44f98ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e4ab28d3e09ba4bfa7aafe2290a0e4e7cea2778ec54d2e731619f0f44f98ca->enter($__internal_99e4ab28d3e09ba4bfa7aafe2290a0e4e7cea2778ec54d2e731619f0f44f98ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5a9137eaaefe91b6f9657b8d19d972078db934b5ab327dd2db9f1b11393a7c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a9137eaaefe91b6f9657b8d19d972078db934b5ab327dd2db9f1b11393a7c92->enter($__internal_5a9137eaaefe91b6f9657b8d19d972078db934b5ab327dd2db9f1b11393a7c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carosseries ";
        
        $__internal_5a9137eaaefe91b6f9657b8d19d972078db934b5ab327dd2db9f1b11393a7c92->leave($__internal_5a9137eaaefe91b6f9657b8d19d972078db934b5ab327dd2db9f1b11393a7c92_prof);

        
        $__internal_99e4ab28d3e09ba4bfa7aafe2290a0e4e7cea2778ec54d2e731619f0f44f98ca->leave($__internal_99e4ab28d3e09ba4bfa7aafe2290a0e4e7cea2778ec54d2e731619f0f44f98ca_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_15cb2673a7f2b84d0e3b0a7338bf971a13a7e4f793bf690ef91c27d5f67a7a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15cb2673a7f2b84d0e3b0a7338bf971a13a7e4f793bf690ef91c27d5f67a7a74->enter($__internal_15cb2673a7f2b84d0e3b0a7338bf971a13a7e4f793bf690ef91c27d5f67a7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c72e125e9cc8eb8bde1f2decc560503cce52afb222c29a6f6a34631d2d978993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72e125e9cc8eb8bde1f2decc560503cce52afb222c29a6f6a34631d2d978993->enter($__internal_c72e125e9cc8eb8bde1f2decc560503cce52afb222c29a6f6a34631d2d978993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 55
            echo "                                    <tr>

                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "roleName", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_c72e125e9cc8eb8bde1f2decc560503cce52afb222c29a6f6a34631d2d978993->leave($__internal_c72e125e9cc8eb8bde1f2decc560503cce52afb222c29a6f6a34631d2d978993_prof);

        
        $__internal_15cb2673a7f2b84d0e3b0a7338bf971a13a7e4f793bf690ef91c27d5f67a7a74->leave($__internal_15cb2673a7f2b84d0e3b0a7338bf971a13a7e4f793bf690ef91c27d5f67a7a74_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea60545baaa2209b2684cdd928c95fff2ffaa38ebf577fcef2fe84b8490c806f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea60545baaa2209b2684cdd928c95fff2ffaa38ebf577fcef2fe84b8490c806f->enter($__internal_ea60545baaa2209b2684cdd928c95fff2ffaa38ebf577fcef2fe84b8490c806f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6e717c7479b87985bee9b6afc2ba5fe2de6decddef0eb6db0d63839c321bc364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e717c7479b87985bee9b6afc2ba5fe2de6decddef0eb6db0d63839c321bc364->enter($__internal_6e717c7479b87985bee9b6afc2ba5fe2de6decddef0eb6db0d63839c321bc364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_6e717c7479b87985bee9b6afc2ba5fe2de6decddef0eb6db0d63839c321bc364->leave($__internal_6e717c7479b87985bee9b6afc2ba5fe2de6decddef0eb6db0d63839c321bc364_prof);

        
        $__internal_ea60545baaa2209b2684cdd928c95fff2ffaa38ebf577fcef2fe84b8490c806f->leave($__internal_ea60545baaa2209b2684cdd928c95fff2ffaa38ebf577fcef2fe84b8490c806f_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtRole/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  204 => 71,  186 => 61,  176 => 57,  172 => 55,  168 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des carosseries {% endblock %}

{% set menu_role      = true %}
{% set menu_role_list = true %}

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
                    <a href=\"{{ path('role_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('role_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for role in roles %}
                                    <tr>

                                        <td>{{ role.roleName }}</td>

                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

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
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "@Admin/CtRole/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtRole\\index.html.twig");
    }
}
