<?php

/* AdminBundle:CtProcesVerbal:add.html.twig */
class __TwigTemplate_183b842cc7a61c4b9d4151028993d5bcd2e9e05cf315576e0561b55799d6d640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtProcesVerbal:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5473dcc8086b309f822afa8d4dfa1ed3af2f11960955472e6c25e71f17643dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5473dcc8086b309f822afa8d4dfa1ed3af2f11960955472e6c25e71f17643dae->enter($__internal_5473dcc8086b309f822afa8d4dfa1ed3af2f11960955472e6c25e71f17643dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        $__internal_cfaf4acd78adcb8b0eba674f0bf35785a78458c286e1825b6c4cad91cc90c893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfaf4acd78adcb8b0eba674f0bf35785a78458c286e1825b6c4cad91cc90c893->enter($__internal_cfaf4acd78adcb8b0eba674f0bf35785a78458c286e1825b6c4cad91cc90c893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtProcesVerbal:add.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_proces_verbal"] = true;
        // line 8
        $context["menu_proces_verbal_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5473dcc8086b309f822afa8d4dfa1ed3af2f11960955472e6c25e71f17643dae->leave($__internal_5473dcc8086b309f822afa8d4dfa1ed3af2f11960955472e6c25e71f17643dae_prof);

        
        $__internal_cfaf4acd78adcb8b0eba674f0bf35785a78458c286e1825b6c4cad91cc90c893->leave($__internal_cfaf4acd78adcb8b0eba674f0bf35785a78458c286e1825b6c4cad91cc90c893_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eaac9ddb4444a94849818ec3d330e2ab8d4a2eedf1f53b338ecacd82a75a48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaac9ddb4444a94849818ec3d330e2ab8d4a2eedf1f53b338ecacd82a75a48d->enter($__internal_6eaac9ddb4444a94849818ec3d330e2ab8d4a2eedf1f53b338ecacd82a75a48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc19b94bbdf84831d38ab7b39b414d71d7b55440ac6d2156861e7c050df3104e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc19b94bbdf84831d38ab7b39b414d71d7b55440ac6d2156861e7c050df3104e->enter($__internal_dc19b94bbdf84831d38ab7b39b414d71d7b55440ac6d2156861e7c050df3104e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Ajout proces verbal ";
        
        $__internal_dc19b94bbdf84831d38ab7b39b414d71d7b55440ac6d2156861e7c050df3104e->leave($__internal_dc19b94bbdf84831d38ab7b39b414d71d7b55440ac6d2156861e7c050df3104e_prof);

        
        $__internal_6eaac9ddb4444a94849818ec3d330e2ab8d4a2eedf1f53b338ecacd82a75a48d->leave($__internal_6eaac9ddb4444a94849818ec3d330e2ab8d4a2eedf1f53b338ecacd82a75a48d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7a21c4f6ffd54ec8c6e262948251529aa2bca0b8bfcf0b037ff55a55ec14539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a21c4f6ffd54ec8c6e262948251529aa2bca0b8bfcf0b037ff55a55ec14539->enter($__internal_a7a21c4f6ffd54ec8c6e262948251529aa2bca0b8bfcf0b037ff55a55ec14539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_468f6346c38e4fbbb9fbbbb5074442da7a7bbdd6137a876221a376a15174662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468f6346c38e4fbbb9fbbbb5074442da7a7bbdd6137a876221a376a15174662a->enter($__internal_468f6346c38e4fbbb9fbbbb5074442da7a7bbdd6137a876221a376a15174662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvType", array()), 'row');
        echo "
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pvTarif", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proces_verbal_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_468f6346c38e4fbbb9fbbbb5074442da7a7bbdd6137a876221a376a15174662a->leave($__internal_468f6346c38e4fbbb9fbbbb5074442da7a7bbdd6137a876221a376a15174662a_prof);

        
        $__internal_a7a21c4f6ffd54ec8c6e262948251529aa2bca0b8bfcf0b037ff55a55ec14539->leave($__internal_a7a21c4f6ffd54ec8c6e262948251529aa2bca0b8bfcf0b037ff55a55ec14539_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtProcesVerbal:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 42,  137 => 37,  129 => 32,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Ajout proces verbal {% endblock %}

{% set menu_proces_verbal           = true %}
{% set menu_proces_verbal_create    = true %}

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
    
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Créer un Proces Verbal</h3>
                    </div>
                    
                    <div class=\"box-body\">
                        {{ form_row(form.pvType) }}
                        {{ form_row(form.pvTarif) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" name=\"new_proces_verbal\"/>
                        <a href=\"{{ path('proces_verbal_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>                    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtProcesVerbal:add.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtProcesVerbal/add.html.twig");
    }
}
